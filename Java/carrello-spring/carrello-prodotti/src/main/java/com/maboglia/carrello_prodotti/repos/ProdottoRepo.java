package com.maboglia.carrello_prodotti.repos;

import java.util.List;

import org.springframework.data.jpa.repository.JpaRepository;
import org.springframework.stereotype.Repository;

import com.maboglia.carrello_prodotti.entities.Prodotto;

@Repository
public interface ProdottoRepo extends JpaRepository<Prodotto, Integer> {

    List<Prodotto> findByCategoria(String categoria);

}
