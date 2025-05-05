package gioco;

import java.util.Random;
import java.util.Scanner;

public class Wordle2 {

	public static void main(String[] args) {
		
		String[] PAROLE_SEGRETE = {
	  			"PIZZA","AMORE","AGLIO","PALLA"
	  			
	  	};
		
		String parola = init(PAROLE_SEGRETE);
		Scanner scanner = new Scanner(System.in);
		
		final int tentativi = 6;
		int partita = 0;
		
		while (partita < tentativi) {
			
			System.out.print("Inserisci una parola: ");
			String parolaUtente = scanner.nextLine();
			if (parolaUtente.equals(parola))
				System.out.println("Complimenti. Hai indovinato");
			else {
				String result = verifica(parola, parolaUtente);
				System.out.println("Feedback: " + result);
			}
			
			partita++;
		}
		
		System.out.println("Game over");
		
		
	}

	private static String verifica(String parola, String parolaUtente) {

		char[] arrayChar = parolaUtente.toCharArray();
		StringBuilder result = new StringBuilder(parolaUtente);
		for (int i = 0; i < arrayChar.length; i++) {

			int pos = parola.indexOf(arrayChar[i]);
			if (pos > -1)
			result.setCharAt(pos, arrayChar[i]);
			else
			result.setCharAt(i, '*');
			
		}
		
		return result.toString();
	}

	private static String init(String[] parole) {
		Random r = new Random();
    	return parole[r.nextInt(0, parole.length)];
	}
	
}
