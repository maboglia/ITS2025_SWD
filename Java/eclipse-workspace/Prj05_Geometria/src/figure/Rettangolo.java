package figure;

public class Rettangolo {

	private Segmento base, altezza;

	public Rettangolo(Segmento base, Segmento altezza) {
		this.base = base;
		this.altezza = altezza;
	}
	public double perimetro() {
		return 2*(base.lunghezza() + altezza.lunghezza());
	}
	public double area() {
		return base.lunghezza() * altezza.lunghezza();
	}
	@Override
	public String toString() {
		return "Rettangolo [perimetro()=" + perimetro() + ", area()=" + area() + "]";
	}
	
}
