package com.maboglia.carrello_prodotti.controllers;

import java.util.List;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.http.HttpStatus;
import org.springframework.http.ResponseEntity;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RestController;

import com.maboglia.carrello_prodotti.entities.Prodotto;
import com.maboglia.carrello_prodotti.services.ProdottoService;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.RequestParam;


@RestController
@RequestMapping("api")
public class ProdottiREST {

    @Autowired
    private ProdottoService service;

    @GetMapping("prodotti")
    public ResponseEntity<List<Prodotto>> getProdotti() {
        return new ResponseEntity<>(service.getProdotti(), HttpStatus.OK);
    }
    



}
