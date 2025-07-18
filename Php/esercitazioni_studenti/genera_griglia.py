import csv
import re
from collections import defaultdict

# Percorso file tree
TREE_FILE = "tree.txt"

# Dati: studente → { esercitazione: conteggio file }
dati = defaultdict(lambda: defaultdict(int))

studente_corrente = None
lezione_corrente = None

# Regex
re_studente = re.compile(r"^\s*\+---([^\n\r]+)")
re_lezione = re.compile(r"^\s*ª\s*\+---(L[0-9]+|Lezione[0-9]+)", re.IGNORECASE)
re_file = re.compile(r"^\s*ª\s+[^+ª]+\.\w{1,5}$")

with open(TREE_FILE, "r", encoding="iso-8859-1") as f:
    for line in f:
        line = line.rstrip()

        # Studente
        m_studente = re_studente.match(line)
        if m_studente and not "Esercitazione" in m_studente.group(1):
            studente_corrente = m_studente.group(1).strip()
            lezione_corrente = None
            continue

        # Esercitazione
        m_lezione = re_lezione.match(line)
        if m_lezione and studente_corrente:
            lezione_corrente = m_lezione.group(1).strip().upper()
            continue

        # File
        if re_file.match(line) and studente_corrente and lezione_corrente:
            dati[studente_corrente][lezione_corrente] += 1

# Raccogli tutte le esercitazioni trovate
tutte_lezioni = sorted({lez for esercizi in dati.values() for lez in esercizi})

# Salva CSV
with open("griglia_esercitazioni.csv", "w", newline='', encoding="utf-8") as f:
    writer = csv.writer(f)
    header = ["Nome", "Cognome"] + tutte_lezioni
    writer.writerow(header)

    for studente, esercizi in dati.items():
        parts = studente.split()
        nome = parts[0]
        cognome = " ".join(parts[1:]) if len(parts) > 1 else ""
        riga = [nome, cognome]
        for lez in tutte_lezioni:
            riga.append(esercizi.get(lez, 0))
        writer.writerow(riga)

print("✅ File creato: griglia_esercitazioni.csv")
