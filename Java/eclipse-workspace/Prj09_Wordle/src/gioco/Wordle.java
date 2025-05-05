package gioco;

import java.util.Random;
import java.util.Scanner;

public class Wordle {
	  	private static final String[] PAROLE_SEGRETE = {
	  			"PIZZA","AMORE","AGLIO","PALLA"
	  			
	  	};
	  	
	    private static final int MAX_TENTATIVI = 6;

	    public static void main(String[] args) {
	        StringBuilder parolaCorrente = new StringBuilder("____"); // Inizializziamo con una parola di lunghezza fissa

	        int tentativiRimasti = MAX_TENTATIVI;

	        Scanner scanner = new Scanner(System.in);

	        String PAROLA_SEGRETA = init(PAROLE_SEGRETE);
	        
	        while (tentativiRimasti > 0 && !parolaCorrente.toString().equals(PAROLA_SEGRETA)) {
	            System.out.println("Parola attuale: " + parolaCorrente);
	            System.out.println("Tentativi rimasti: " + tentativiRimasti);
	            System.out.print("Inserisci una parola: ");

	            String tentativo = scanner.next().toUpperCase();

	            if (tentativo.length() == PAROLA_SEGRETA.length()) {
	                if (tentativo.equals(PAROLA_SEGRETA)) {
	                    parolaCorrente = new StringBuilder(PAROLA_SEGRETA);
	                } else {
	                    System.out.println("Parola errata. Hai perso un tentativo!");
	                    tentativiRimasti--;
	                }
	            } else {
	                System.out.println("La lunghezza del tuo tentativo non è corretta.");
	            }
	        }

	        scanner.close();

	        if (parolaCorrente.toString().equals(PAROLA_SEGRETA)) {
	            System.out.println("Complimenti! Hai indovinato la parola: " + PAROLA_SEGRETA);
	        } else {
	            System.out.println("Mi dispiace, hai esaurito i tentativi. La parola era: " + PAROLA_SEGRETA);
	        }
	    }
	    
	    private static String init(String[] parole) {
	    	Random r = new Random();
	    	return parole[r.nextInt(0, parole.length)];
	    }
	    
}
