package prove;

import java.util.Scanner;

public class ProvaScanner {

	public static void main(String[] args) {
		
		System.out.println("Ciao! Come ti chiami?");
		
		Scanner scanner1 = new Scanner(System.in);
		
		String nome = scanner1.nextLine();
		
		System.out.println("Ciao " + nome);
		
		System.out.println("username");
		String user = scanner1.nextLine();

		System.out.println("password");
		String pass = scanner1.nextLine();
		
		if (user.equals("mauro") && pass.equals("12345")  ) {
			System.out.println("sei loggato");
		} else {
			System.out.println("Non sei loggato, prova ancora!");
		}
		
		
		
	}

}
