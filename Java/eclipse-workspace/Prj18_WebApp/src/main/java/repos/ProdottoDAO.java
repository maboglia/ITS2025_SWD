package repos;

import java.util.List;

import model.Prodotto;

public interface ProdottoDAO {

	String FIND_ALL = "Select * from prodotti";
	String FIND_ONE = "Select * from prodotti where id = ?";
	
	List<Prodotto> getProdotti();
	Prodotto getProdottoById(int id);
	
	
}
