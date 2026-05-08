package com.esame.movies.services;

import java.util.List;

import com.esame.movies.entities.Movie;

public interface MovieService {

    List<Movie> getMovies();
    Movie getMovieById(Long id);
    Movie addMovie(Movie m);

}
