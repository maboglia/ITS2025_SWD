package com.maboglia.carrello_prodotti.services;

import java.util.List;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import com.maboglia.carrello_prodotti.entities.Prodotto;
import com.maboglia.carrello_prodotti.repos.ProdottoRepo;

@Service
public class ProdottoServiceImpl implements ProdottoService {

    @Autowired
    private ProdottoRepo repo;


    @Override
    public List<Prodotto> getProdotti() {
        return repo.findAll();
    }

    @Override
    public List<Prodotto> getProdottiByCategoria(String categoria) {
        return repo.findByCategoria(categoria);
    }

    @Override
    public Prodotto getProdottoById(int id) {
        return repo.findById(id).orElseThrow();
    }

    @Override
    public List<String> getCategorie() {
        return repo.findAll().stream().map(p -> p.getCategoria()).distinct().sorted().toList();
    }

    @Override
    public Prodotto addProdotto(Prodotto p) {
        return repo.save(p);
    }

    @Override
    public Prodotto updateProdotto(Prodotto p) {
        return repo.save(p);
    }

    @Override
    public void deleteProdottoById(int id) {
        repo.deleteById(null);
    }

   

}
