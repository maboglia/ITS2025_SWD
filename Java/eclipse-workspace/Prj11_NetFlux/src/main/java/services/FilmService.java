package services;

import java.util.ArrayList;
import java.util.List;

import entities.Film;
import entities.Serie;
import repos.FilmDAO;
import repos.SerieDAO;

public class FilmService {

	private FilmDAO dao;
	private SerieDAO serieDAO;
	
	public FilmService() {
		this.dao = new FilmDAO();
		this.serieDAO = new SerieDAO();
	}
	
	public void addSerie(String title, double rating, int year) {
		Serie s = new Serie();
		s.setTitle(title);
		s.setRating(rating);
		s.setYear(year);
		serieDAO.addSerie(s);
	}
	
	public List<Film> getFilms(){
		return new ArrayList<>(dao.getFilms());
	}
	public void addFilm(Film f) {
		
		dao.addFilm(f);
	}
	
}
