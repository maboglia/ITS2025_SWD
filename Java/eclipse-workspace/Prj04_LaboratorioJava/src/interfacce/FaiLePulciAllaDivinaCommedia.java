package interfacce;

import java.io.File;
import java.io.FileNotFoundException;
import java.util.ArrayList;
import java.util.List;
import java.util.Scanner;

public class FaiLePulciAllaDivinaCommedia {

	public static void main(String[] args) {

		List<String> divina = leggiFileDiTesto("files/divina_commedia.txt");
		
		for (int i = 0; i < divina.size(); i++) {
			System.out.println(divina.get(i)); 
		}


	}

	private static List<String> leggiFileDiTesto(String nomeFile) {

		List<String> lettura = new ArrayList<>();
		File fileDaleggere = new File(nomeFile);
		try {
			Scanner input = new Scanner(fileDaleggere);
			while(input.hasNextLine()) {
				
				String riga = input.nextLine();
				lettura.add(riga);
				
			}
			
		} catch (FileNotFoundException e) {
			System.err.println("C'ho probbblemi a leggere la divina commedia. ");
			System.err.println(e.getMessage());
		}
		
		
		return lettura;
	}

}
