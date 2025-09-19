package generics;

import java.util.ArrayList;
import java.util.List;

public class GenericDemo2 {

	public static void main(String[] args) {
		
		Object stringa = new String("pippo");
		
		List<String> stringhe = List.of("mele", "pere", "banane");
		List<Integer> interi = List.of(22,24,26,28);
		
		List<Object> oggetti = new ArrayList<>();
		
		stampaLista(stringhe);
		stampaLista(interi);
		
	}

	private static <T> void stampaLista(List<?> genericaLista) {
		for (var genericoValore : genericaLista) {
			System.out.println(genericoValore);
		}
		
	}
	
}
