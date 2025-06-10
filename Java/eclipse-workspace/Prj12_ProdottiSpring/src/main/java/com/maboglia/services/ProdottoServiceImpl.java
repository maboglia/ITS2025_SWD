package com.maboglia.services;

import java.util.ArrayList;
import java.util.List;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import com.maboglia.entities.Prodotto;
import com.maboglia.repos.ProdottoDAO;

@Service
public class ProdottoServiceImpl implements ProdottoService {

	@Autowired
	private ProdottoDAO dao;
	
	@Override
	public List<Prodotto> getProdotti() {
		// TODO Auto-generated method stub
		return dao.findAll();
	}

	@Override
	public Prodotto getProdottoById(int id) {
		// TODO Auto-generated method stub
		return null;
	}

	@Override
	public Prodotto addProdotto(Prodotto p) {
		// TODO Auto-generated method stub
		return null;
	}

	@Override
	public Prodotto updateProdotto(Prodotto p) {
		// TODO Auto-generated method stub
		return null;
	}

	@Override
	public void deleteProdotto(int id) {
		// TODO Auto-generated method stub

	}

	@Override
	public List<Prodotto> getProdottiByCategoria(String categoria) {

		List<Prodotto> lista = new ArrayList<>();

		for (Prodotto prodotto : getProdotti()) {
			if (prodotto.getCategoria().equalsIgnoreCase(categoria))
				lista.add(prodotto);
		}
		
		return lista;
	}

}
