package prove.collezioni;

import java.util.Objects;

public class Nota implements Comparable<Nota>{

	public String ita;
	public String usa;

	public Nota(String ita) {
		this.ita = ita;
		this.usa = this.converti(ita);
	}

	private String converti(String notaIta) {
		String risposta = "";
		switch (notaIta) {
			case "do": risposta = "A"; break;
			case "re": risposta = "B"; break;
			case "mi": risposta = "C"; break;
			case "fa": risposta = "D"; break;
			case "sol": risposta = "E"; break;
			case "la": risposta = "F"; break;
			case "si": risposta = "G"; break;
		}
		return risposta;
	}

	@Override
	public String toString() {
		return "Nota [ita=" + ita + ", usa=" + usa + "]";
	}

	
	
	
	@Override
	public int hashCode() {
		return Objects.hash(ita);
	}

	@Override
	public boolean equals(Object obj) {
		if (this == obj)
			return true;
		if (obj == null)
			return false;
		if (getClass() != obj.getClass())
			return false;
		Nota other = (Nota) obj;
		return ita.equals(other.ita);
	}

	@Override
	public int compareTo(Nota altraNota) {
		
		return altraNota.usa.compareTo(this.usa);
	}
	
}
