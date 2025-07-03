package com.maboglia.ortofrutta.services;

import java.util.List;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import com.maboglia.ortofrutta.entities.Prodotto;
import com.maboglia.ortofrutta.repos.ProdotRepo;

@Service
public class ProdottiServiceImpl implements ProdottiService {


    @Autowired
    private ProdotRepo repo;

	@Override
	public List<Prodotto> getProdotti() {


        return repo.findAll();

    }

    @Override
    public List<Prodotto> getProdottiByCategoria(String categoria) {
        return repo.findByCategoria(categoria);
    }


}
