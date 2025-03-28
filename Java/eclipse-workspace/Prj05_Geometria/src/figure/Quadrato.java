package figure;

public class Quadrato extends Rettangolo {

	private Segmento lato;
	
	/**
	 * Costruttore del Quadrato: prima costruisco il 
	 * Rettangolo passando 2 volte il lato del quadrato
	 * @param lato come parametro iniziale, inserisci il lato del qudrato
	 */
	public Quadrato(Segmento lato) {
		super(lato, lato);
		// TODO Auto-generated constructor stub
		this.lato = lato;
	}

	
	
	@Override
	public double perimetro() {
		// TODO Auto-generated method stub
		System.out.println("Metodo di quadrato");
		return lato.lunghezza() * 4;
	}



	@Override
	public String toString() {
		return "Quadrato [perimetro()=" + perimetro() + ", area()=" + area() + "]";
	}
	
}
