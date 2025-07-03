package com.maboglia.repos;

import org.springframework.data.jpa.repository.JpaRepository;
import org.springframework.stereotype.Repository;

import com.maboglia.entities.Game;

@Repository
public interface GameRepo extends JpaRepository<Game, Integer> {

}
