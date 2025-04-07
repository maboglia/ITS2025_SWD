package prove.collezioni;

import java.util.ArrayList;
import java.util.Collections;

public class ProvaListaNote {

	public static void main(String[] args) {
		ArrayList<Nota> note = new ArrayList<>();
		
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
		
		//Collections.sort(note);

		//String melodia = "";
		StringBuilder costruttoreDiStringhe = new StringBuilder();
		
		for (Nota nota : note) {
			costruttoreDiStringhe.append(nota.ita + " - ");
		}

		//melodia = costruttoreDiStringhe.toString();
		
		System.out.println(costruttoreDiStringhe.toString());
		
	}

}
