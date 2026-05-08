package com.esame.movies.repos;

import org.springframework.data.jpa.repository.JpaRepository;

import com.esame.movies.entities.Movie;

public interface MovieRepo extends JpaRepository<Movie, Long>{

}
