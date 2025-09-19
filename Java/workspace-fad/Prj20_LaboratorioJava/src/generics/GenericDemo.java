package generics;

import java.util.ArrayList;
import java.util.List;

class Printer<T> {
	
	T thing;
	
	public Printer(T thing) {
		this.thing = thing;
	}

	public void print() {
		System.out.println(thing);
	}
	
}

public class GenericDemo {

	public static void main(String[] args) {
		Printer<String> p = new Printer<>("ciao");
		p.print();
		Printer<Double> pDouble = new Printer<>(2.5);
		pDouble.print();
		
		List<String> lista = new ArrayList<>();

	}

}
