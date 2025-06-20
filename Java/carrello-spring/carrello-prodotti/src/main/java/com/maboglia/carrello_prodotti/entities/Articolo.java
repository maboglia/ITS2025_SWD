package com.maboglia.carrello_prodotti.entities;

import jakarta.persistence.Entity;
import jakarta.persistence.GeneratedValue;
import jakarta.persistence.GenerationType;
import jakarta.persistence.Id;
import jakarta.persistence.OneToOne;
import jakarta.persistence.Table;
import lombok.Data;

@Entity
@Table(name = "articoli")
@Data
public class Articolo {

    @Id
    @GeneratedValue(strategy = GenerationType.IDENTITY)
    private int id;

    private double prezzo;

    @OneToOne
    private Prodotto prodotto;
}
