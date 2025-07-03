package com.maboglia.api;

import java.util.List;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RestController;

import com.maboglia.entities.Game;
import com.maboglia.services.GameService;

@RestController
@RequestMapping("api")
public class GamesREST {

	@Autowired
	private GameService service;
	
	@GetMapping("games")
	public List<Game> games(){
		return service.getGames();
	}
	
}
