package com.maboglia.services;

import java.util.List;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import com.maboglia.entities.Game;
import com.maboglia.repos.GameRepo;

@Service
public class GameServiceImpl implements GameService {

	@Autowired
	private GameRepo repo;
	
	@Override
	public List<Game> getGames() {
		// TODO Auto-generated method stub
		return repo.findAll();
	}

	@Override
	public List<Game> getGamesByPublisher(String publisher) {
		// TODO Auto-generated method stub
		return null;
	}

	@Override
	public Game getGameById() {
		// TODO Auto-generated method stub
		return null;
	}

}
