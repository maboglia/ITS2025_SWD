package com.esame.movies.controllers;

import java.util.List;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.http.HttpStatusCode;
import org.springframework.http.ResponseEntity;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RestController;

import com.esame.movies.entities.Movie;
import com.esame.movies.services.MovieService;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.PostMapping;
import org.springframework.web.bind.annotation.RequestBody;



@RestController
@RequestMapping("api/movies")
public class MovieRest {

    @Autowired
    private MovieService service;

    @GetMapping("")
    public ResponseEntity<List<Movie>> findAll() {
        return ResponseEntity.ok(service.getMovies());
    }

    @PostMapping("")
    public ResponseEntity<String> postMethodName(@RequestBody List<Movie> films) {
        for (Movie movie : films) {
            service.addMovie(movie);
        }
        
        return ResponseEntity.ok("Tutto okkkk");
    }
    
    

}
