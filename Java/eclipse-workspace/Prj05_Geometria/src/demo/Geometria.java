package demo;

import figure.Punto;
import figure.Quadrato;
import figure.Rettangolo;
import figure.Segmento;
import figure.Triangolo;

public class Geometria {

	public static void main(String[] args) {
		
		Punto a = new Punto(3,2);
		Punto b = new Punto(7,2);
		Punto c = new Punto(3,5);
		Segmento ab = new Segmento(a, b); 
		Segmento ac = new Segmento(a, c); 
		Triangolo t = new Triangolo(a, b, c);
		Rettangolo r = new Rettangolo(ab, ac);
		Quadrato q = new Quadrato(ab); 
		System.out.println(q);

	}

}
