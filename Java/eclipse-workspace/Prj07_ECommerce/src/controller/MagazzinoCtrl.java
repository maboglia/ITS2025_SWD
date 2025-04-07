package controller;

import java.util.ArrayList;
import java.util.List;

import model.Prodotto;

public class MagazzinoCtrl {

	private String nome;
	private List<Prodotto> prodotti;

	public MagazzinoCtrl(String nome) {
		this.nome = nome;
		this.prodotti = new ArrayList<>();
	}
	
	public void addProdotto(Prodotto p) {
		this.prodotti.add(p);
	}
	
	public List<Prodotto> getProdotti() {
		return prodotti;
	}
	
}
