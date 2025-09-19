package optional;

import java.util.Optional;

public class OptionalDemo {

	public static void main(String[] args) {
		
		Registro r1 = new Registro();
		
		r1.addProdotto(new Prodotto());
		
		Optional<Prodotto> prodottoById = r1.getProdottoById(1); 

		if (prodottoById.isPresent())
		System.out.println("Il prodotto è: " + prodottoById.get());
		
		
	}

}
