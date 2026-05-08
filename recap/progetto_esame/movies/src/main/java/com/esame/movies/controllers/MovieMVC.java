package com.esame.movies.controllers;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Controller;
import org.springframework.ui.Model;

import com.esame.movies.services.MovieService;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RequestParam;


@Controller
@RequestMapping("movies")
public class MovieMVC {

    
    @Autowired
    private MovieService service;

    @GetMapping("")
    public String home(Model m) {

        m.addAttribute("lista", service.getMovies());
        return "pagina";
    }
    

}
