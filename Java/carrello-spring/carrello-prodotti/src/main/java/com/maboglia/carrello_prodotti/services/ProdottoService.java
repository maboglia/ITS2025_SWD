package com.maboglia.carrello_prodotti.services;

import java.util.List;

import com.maboglia.carrello_prodotti.entities.Prodotto;

public interface ProdottoService {

    List<Prodotto> getProdotti();
    List<Prodotto> getProdottiByCategoria(String categoria);
    Prodotto getProdottoById(int id);

    List<String> getCategorie();

    Prodotto addProdotto(Prodotto p);
    Prodotto updateProdotto(Prodotto p);
    void deleteProdottoById(int id);


}
