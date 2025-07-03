package com.maboglia.ortofrutta.repos;

import java.util.List;

import org.springframework.data.jpa.repository.JpaRepository;

import com.maboglia.ortofrutta.entities.Prodotto;

public interface ProdotRepo extends JpaRepository<Prodotto, Integer> {

    List<Prodotto> findByCategoria(String categoria);

}
