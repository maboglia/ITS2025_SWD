package com.maboglia.carrello_prodotti.entities;

import jakarta.persistence.Entity;
import jakarta.persistence.Id;
import jakarta.persistence.Table;
import lombok.Data;

@Entity
@Table(name = "prodotti")
@Data
public class Prodotto {

    @Id
    private int id;
    private String nome;
    private String categoria;
    private double prezzo;
    private int giacenza;

}
