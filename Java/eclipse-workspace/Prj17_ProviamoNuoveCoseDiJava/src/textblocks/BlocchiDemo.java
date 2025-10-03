package textblocks;

public class BlocchiDemo {

	public static void main(String[] args) {

		String nome = "pippo";
		
		String test = String.format("Ciao caro %s", nome);
		
		String blocco = """
				Ciao
				sono un
					blocco 
				multilinea
				""";
		
		System.out.println(blocco); 

	}

}
