package prove.collezioni;

import java.util.List;
import java.util.Queue;
import java.util.ArrayList;
import java.util.Collections;
import java.util.LinkedList;
import java.util.Set;
import java.util.TreeSet;
import java.util.Vector;

public class ProvaSet {

	public static void main(String[] args) {

		Queue<Nota> note = new LinkedList<>();
		
		note.add(new Nota("do"));
		note.add(new Nota("re"));
		note.add(new Nota("mi"));
		note.add(new Nota("fa"));
		note.add(new Nota("sol"));
		note.add(new Nota("la"));
		note.add(new Nota("si"));
		note.add(new Nota("la"));
		note.add(new Nota("sol"));
		note.add(new Nota("fa"));
		note.add(new Nota("mi"));
		note.add(new Nota("re"));
		note.add(new Nota("do"));
		
		Set<Nota> setnote = new TreeSet<>(note);
		
		ordina(note);
		
		for (Nota nota : setnote) {
			System.out.println(nota);
		}
	}
	
	private static List<Nota> ordina(List<Nota> note){
		Collections.sort(note);
		return note;
		
	}
	private static List<Nota> ordina(Queue<Nota> note){
		
		return new ArrayList<>(note);
		
	}
	
	
}
