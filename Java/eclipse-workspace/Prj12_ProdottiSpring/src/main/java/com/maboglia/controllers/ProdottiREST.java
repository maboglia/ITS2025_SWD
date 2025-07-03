package com.maboglia.controllers;

import java.util.List;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RestController;

import com.maboglia.entities.Prodotto;
import com.maboglia.services.ProdottoService;

@RestController
@RequestMapping("api")
public class ProdottiREST {

	@Autowired
	private ProdottoService service;
	
	@GetMapping("prodotti")
	public List<Prodotto> getProdotti(){
		return service.getProdotti();
	}
	
}
