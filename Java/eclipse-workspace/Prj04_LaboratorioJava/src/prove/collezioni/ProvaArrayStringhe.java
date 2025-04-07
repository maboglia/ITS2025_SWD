package prove.collezioni;

import java.util.Arrays;
import java.util.List;

public class ProvaArrayStringhe {

	public static void main(String[] args) {

		String[] note = new String[7];
		
		note[0] = "do";
		note[1] = "re";
		note[2] = "mi";
		note[3] = "fa";//abcdefghijklmnopqrstuvwxyz
		note[4] = "sol";
		note[5] = "la";
		note[6] = "si";
		
		String[] noteLeSoGia = {"do","re","mi","fa","sol","la","si"};
		String[] noteLeSoGia2 =new String[]{"do","re","mi","fa","sol","la","si"};
		noteLeSoGia2[2] = "do";
		
		//System.out.println(      note[3].compareTo(note[0])          );
		
		Arrays.sort(note);
		
		for (String nota : note) {
			//System.out.println(nota);
		}
		
		List<String> listaNote = Arrays.asList(note);
		listaNote.add("sol7");
		
		for (String nota : listaNote) {
			System.out.println(nota);
		}
		
	}

}
