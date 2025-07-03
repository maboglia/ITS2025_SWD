package com.maboglia.carrello_prodotti.controllers;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Controller;
import org.springframework.ui.Model;

import com.maboglia.carrello_prodotti.entities.Articolo;
import com.maboglia.carrello_prodotti.entities.Carrello;
import com.maboglia.carrello_prodotti.entities.Prodotto;
import com.maboglia.carrello_prodotti.services.ProdottoService;

import jakarta.servlet.http.HttpSession;

import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.ResponseBody;
import org.springframework.web.bind.annotation.PostMapping;
import org.springframework.web.bind.annotation.RequestBody;
import org.springframework.web.bind.annotation.RequestParam;



@Controller
public class ProdottiMVC {

    @Autowired
    private ProdottoService service;
    
    @PostMapping("/cart/add")
    public String addProdotto(@RequestParam("prodotto_id") String prodottoId, HttpSession session ) {
        System.out.println("L'id del prodotto è: " + prodottoId);
        
        int id = Integer.parseInt(prodottoId);

        Prodotto p = service.getProdottoById(id);

        Articolo a = new Articolo();
        a.setPrezzo(p.getPrezzo());
        a.setProdotto(p);

        if (session.getAttribute("carrello")==null){
            Carrello c = new Carrello();
            session.setAttribute("carrello", c);
        }

        Carrello temp = (Carrello) session.getAttribute("carrello");

        temp.getArticoli().add(a);
        temp.setTotale( temp.getTotale() +   a.getPrezzo()  );

        session.setAttribute("carrello", temp);

        return "redirect:/prodotti";
    }
    
    
    @GetMapping("/")
    public String home() {
        return "home";
    }

    @GetMapping("/rest")
    public String rest() {
        return "rest";
    }

    @GetMapping("/carrello")
    public String carrello(Model m, HttpSession session) {
        if (session.getAttribute("carrello")==null){
            Carrello c = new Carrello();
            session.setAttribute("carrello", c);
        }

        Carrello temp = (Carrello) session.getAttribute("carrello");

        System.out.println("Nel carrello ci sono " + temp.getArticoli().size() + " articoli");

        m.addAttribute("totale", temp.getTotale());
        m.addAttribute("articoli", temp.getArticoli());

        return "carrello";
    }

    @GetMapping("/prodotti")
    public String getProdotti(Model m) {
        m.addAttribute("prodotti", service.getProdotti());
        return "prodotti";
    }
    
    @GetMapping("/funziona")
    @ResponseBody
    public String funziona() {
        return "Tutto okkei";
    }
    


}
