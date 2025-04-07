package prove.collezioni;

import java.util.Arrays;

public class ProvaMelodiaNote {

	public static void main(String[] args) {
		Nota[] note = new Nota[7];
		
		note[0] = new Nota("do");
		note[1] = new Nota("re");
		note[2] = new Nota("mi");
		note[3] = new Nota("fa");
		note[4] = new Nota("sol");
		note[5] = new Nota("la");
		note[6] = new Nota("si");
		
		Arrays.sort(note);
		
		for (Nota nota : note) {
			System.out.println(nota);
		}
		

	}

}
