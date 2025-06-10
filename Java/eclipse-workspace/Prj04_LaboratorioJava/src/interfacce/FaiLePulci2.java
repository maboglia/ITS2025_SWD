package interfacce;

import java.io.IOException;
import java.nio.file.Files;
import java.nio.file.Paths;
import java.util.List;

public class FaiLePulci2 {

	public static void main(String[] args) {

		try {
			List<String> divina = Files.readAllLines(Paths.get("files/divina_commedia.txt"));
			
			divina
				.stream()
				.filter(riga -> !riga.isEmpty())
				.filter(riga -> riga.contains("intervallo"))
				.forEach(riga -> System.out.println(riga));
		
		
		
		
		} catch (IOException e) {
			System.err.println("Si è verificato un errore");
		}

		
		
	}

}
