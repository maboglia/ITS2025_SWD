package com.maboglia.services;

import java.util.List;

import com.maboglia.entities.Prodotto;

public interface ProdottoService {

	List<Prodotto> getProdotti();
	List<Prodotto> getProdottiByCategoria(String categoria);
	Prodotto getProdottoById(int id);
	
	Prodotto addProdotto(Prodotto p);
	Prodotto updateProdotto(Prodotto p);
	void deleteProdotto(int id);
	
}
