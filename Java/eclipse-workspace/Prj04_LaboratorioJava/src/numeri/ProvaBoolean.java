package numeri;

public class ProvaBoolean {

	public static void main(String[] args) {

		boolean gira = true;
		
		while(gira) {
			
			System.out.println("Mi girano");
			
			if (Math.random() > 0.97)
				gira = false;
			
		}
		System.out.println("Non mi girano più");

	}

}
