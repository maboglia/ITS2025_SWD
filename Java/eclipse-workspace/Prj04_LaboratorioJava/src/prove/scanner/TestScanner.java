package prove.scanner;

import java.util.Scanner;

public class TestScanner {

	public static void main(String[] args) {
		Scanner scanner = new Scanner(System.in);
		
		System.out.println("Come ti chiami?");
		
		String nome = scanner.nextLine();
		
		System.out.println("Quanti anni hai?");
		
		int eta = scanner.nextInt();
		
		System.out.printf("Benvenuto %s hai %d anni", nome, eta);
		
		scanner.close();
	}

}
