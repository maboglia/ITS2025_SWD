package com.maboglia.carrello_prodotti.entities;

import java.util.ArrayList;
import java.util.List;

import jakarta.persistence.Entity;
import jakarta.persistence.GeneratedValue;
import jakarta.persistence.GenerationType;
import jakarta.persistence.Id;
import jakarta.persistence.ManyToOne;
import jakarta.persistence.OneToMany;
import jakarta.persistence.Table;
import lombok.Data;

@Entity
@Table(name = "carrelli")
@Data
public class Carrello {

    @Id
    @GeneratedValue(strategy = GenerationType.IDENTITY)
    private int id;

    private double totale;

    @OneToMany
    private List<Articolo> articoli = new ArrayList<>();

}
