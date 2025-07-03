package com.maboglia.web;

import java.util.List;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Controller;
import org.springframework.ui.Model;
import org.springframework.web.bind.annotation.GetMapping;

import com.maboglia.entities.Game;
import com.maboglia.services.GameService;

@Controller
public class GamesMVC {

	@Autowired
	private GameService service;
	
	@GetMapping("games")
	public String giochi(Model m) {
		
		List<Game> games = service.getGames();
		m.addAttribute("games", games);
		
		return "giochi";//questo è il nome di un file html dentro templates
	}
	
}
