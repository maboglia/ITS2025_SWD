package com.esame.movies.services;

import java.util.List;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import com.esame.movies.entities.Movie;
import com.esame.movies.repos.MovieRepo;

@Service
public class MovieServiceImpl implements MovieService{

    @Autowired
    private MovieRepo repo;


    @Override
    public List<Movie> getMovies() {
        return repo.findAll();
    }

    @Override
    public Movie getMovieById(Long id) {
        return repo.findById(id).get();
    }

    @Override
    public Movie addMovie(Movie m) {
        return repo.save(m);
    }

}
