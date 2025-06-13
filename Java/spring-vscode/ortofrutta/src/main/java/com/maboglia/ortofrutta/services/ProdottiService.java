package com.maboglia.ortofrutta.services;

import java.util.List;

import com.maboglia.ortofrutta.entities.Prodotto;

public interface ProdottiService {

    List<Prodotto> getProdotti();

    List<Prodotto> getProdottiByCategoria(String categoria);
    
    

}
