package figure;

public class Segmento {

	public Punto a, b;

	public Segmento(Punto a, Punto b) {
		this.a = a;
		this.b = b;
	}
	
	public double lunghezza() {
		return Math.sqrt( 
				Math.pow(a.x - b.x, 2) //16
				+ 
				Math.pow(a.y - b.y, 2)  //0
				);//4
	}

	@Override //sovrascrittura di un metodo di una super classe
	public String toString() {
		return "Segmento [a=" + a + ", b=" + b + ", lunghezza()=" + lunghezza() + "]";
	}
	
	
	
}
