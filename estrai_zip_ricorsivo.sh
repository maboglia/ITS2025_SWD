#!/bin/bash

# Cartella di partenza (usa la corrente se non specificata)
BASE_DIR="${1:-.}"

# Trova tutti i file .zip nella cartella e sottocartelle
find "$BASE_DIR" -type f -name "*.zip" | while read -r ZIPFILE; do
    # Estrai la directory che contiene lo zip
    DIRNAME=$(dirname "$ZIPFILE")

    # Ottieni solo il nome del file zip (senza percorso)
    ZIPNAME=$(basename "$ZIPFILE")

    # Estrai il nome della persona (tutto prima del primo "_")
    PERSONA=$(echo "$ZIPNAME" | sed 's/_.*//')

    # Directory di destinazione
    DESTDIR="$DIRNAME/$PERSONA"

    echo "Estrazione di: $ZIPFILE in $DESTDIR"

    # Crea la cartella se non esiste
    mkdir -p "$DESTDIR"

    # Estrai lo zip nella nuova cartella
    unzip -o "$ZIPFILE" -d "$DESTDIR"

    # (Opzionale) elimina lo zip dopo l’estrazione
    # rm "$ZIPFILE"
done

echo "Estrazione completata."
