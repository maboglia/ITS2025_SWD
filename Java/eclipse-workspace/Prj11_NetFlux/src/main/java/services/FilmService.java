package services;

import java.util.ArrayList;
import java.util.List;

import entities.Film;
import repos.FilmDAO;

public class FilmService {

	private FilmDAO dao;
	
	public FilmService() {
		this.dao = new FilmDAO();
	}
	
	public List<Film> getFilms(){
		return new ArrayList<>(dao.getFilms());
	}
	public void addFilm(Film f) {
		
		dao.addFilm(f);
	}
	
}
