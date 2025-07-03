package com.maboglia.services;

import java.util.List;

import com.maboglia.entities.Game;

public interface GameService {

	List<Game> getGames();
	List<Game> getGamesByPublisher(String publisher);
	Game getGameById();
	
	
}
