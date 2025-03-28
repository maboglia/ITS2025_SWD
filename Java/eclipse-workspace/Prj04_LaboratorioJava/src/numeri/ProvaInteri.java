package numeri;

public class ProvaInteri {

	public static void main(String[] args) {

		byte b = 1;//8bit -128 +127
		short s = 2;//16bit
		int i = 3;//32bit
		long lo = 4L;//64bit
		
		int somma = b + s + i + (int)lo;//+ operatore aritmetico
		
		System.out.println(b);
		System.out.println(s);
		System.out.println(i);
		System.out.println(lo);
		System.out.println("iL VALORE DI SOMMA: " + somma);//+ operatore concatenamento
		
		

	}

}
