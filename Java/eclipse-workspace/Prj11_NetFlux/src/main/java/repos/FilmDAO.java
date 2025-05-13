package repos;

import java.util.Collection;
import java.util.HashMap;
import java.util.Map;

import entities.Film;

public class FilmDAO {

	/**
	 * La mappa films rappresenta in Java la tabella 
	 * sql imdb_top_top250
	 */
	private Map<Integer, Film> films;
	
	public FilmDAO() {
		this.films = new HashMap<>();
	}
	
	public void addFilm(Film f) {
		films.put(f.getId(), f);
	}
	
	public Film getFilmById(int id) {
		return this.films.get(id);
	}
	
	public Collection<Film> getFilms(){
		//faccio un film fake, poi dovro collegare il db
		
		Film f = new Film();
		f.setId(1);
		f.setTitle("Il padrino");
		f.setRating(9.5);
		f.setYear(1974);

		addFilm(f);
		
		return this.films.values();
	}
	
}
