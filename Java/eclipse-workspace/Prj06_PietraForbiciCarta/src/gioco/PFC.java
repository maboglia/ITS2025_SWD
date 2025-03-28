package gioco;

import java.util.Random;
import java.util.Scanner;

public class PFC {

	public static void main(String[] args) {

		String[] scelte = {"Pietra", "Forbici", "Carta"};
		
		String sceltaUmano = sceltaUmano(scelte);
		String sceltaMacchina = sceltaMacchina(scelte);
		System.out.println("Scelta umano " + sceltaUmano);
		System.out.println("Scelta macchina " + sceltaMacchina);
		
		/*
		 * Scrivi la logica per la valutazione delle scelte
		 * Ricorda che per confrontare 2 stringhe devi usare il metodo equals()
		 * Stampa a video il risultato: Pareggio, Vince umano, Vince macchina
		 */

	}

	private static String sceltaMacchina(String[] scelte) {
		Random rand = new Random();
		int casuale = rand.nextInt(0, scelte.length);
		return scelte[casuale];
	}

	private static String sceltaUmano(String[] scelte) {
		System.out.println("Scegli tra:");
		for(String scelta : scelte) {
			System.out.println(scelta);
		}
		
		Scanner input = new Scanner(System.in); 
		String risposta = input.nextLine();
		return risposta;
	}

}
