package optional;

import java.util.ArrayList;
import java.util.List;
import java.util.Optional;

public class Registro {

	private List<Prodotto> prodotti = null;
	
	public Registro() {
		this.prodotti = new ArrayList<Prodotto>();
	}
	
	
	public void addProdotto(Prodotto p) {
		prodotti.add(p);
	}
	
	public Optional<Prodotto> getProdottoById(int id) {
		
		if (prodotti.size()>id)
			return Optional
					.ofNullable(Optional.of(prodotti.get(id))
					.orElse(new Prodotto()));
		else
			return Optional.empty();
	}
	
	
}
