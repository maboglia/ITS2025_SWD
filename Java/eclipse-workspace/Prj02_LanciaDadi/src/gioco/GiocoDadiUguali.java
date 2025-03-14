package gioco;

public class GiocoDadiUguali {//chiude la classe

	public static void main(String[] args) {//apre il main


		Dado dado1 = new Dado();// -> uso la keyword new e creo la prima istanza (esemplare) dell'oogetto di tipo Dado e la chiamo dado1
		Dado dado2 = new Dado();// -> uso la keyword new e creo la seconda istanza (esemplare) dell'oogetto di tipo Dado e la chiamo dado2
		
		final int NUM_LANCI = 500_000_000; //convenzione SNAKE_CASE per le costanti -> uso la keyword final
		int vittorie = 0;
		
		//un ciclo per ripetere le istruzioni per NUM_LANCI
		
		long start = System.currentTimeMillis();  //1970-01-01 millisecondi
		
		for(int i = 0; i < NUM_LANCI; i++) {//apre il ciclo for
			dado1.lanciaDado();//chiamo il metodo lancia sul dado1
			dado2.lanciaDado();//chiamo il metodo lancia sul dado1
			
			//System.out.println("Il valore di dado 1 " + dado1.valoreFacciaSuperiore);
			//System.out.println("Il valore di dado 2 " + dado2.valoreFacciaSuperiore);
	
			if (dado1.valoreFacciaSuperiore == dado2.valoreFacciaSuperiore) {
				//System.out.println("Hai vinto");
				vittorie++;//incremento le vittorie
			
			} else {
				//System.out.println("Non hai vinto");
			}
		}//chiude il ciclo for
		
		long stop = System.currentTimeMillis();
		
		long tempoImpiegato = stop - start;//ms
		
		double percentuale = (double) vittorie / NUM_LANCI * 100;//calcolo la percentuale di vittorie su NUM_lanci
		
		System.out.println("Percentuale vittorie " + percentuale +"%");
		System.out.println("Numero di vittorie " + vittorie);
		System.out.println("Numero di partite " + NUM_LANCI);
		System.out.println("Tempo impiegato " + tempoImpiegato + "ms");
		
		
	}//chiude il main

}//chiude la classe
