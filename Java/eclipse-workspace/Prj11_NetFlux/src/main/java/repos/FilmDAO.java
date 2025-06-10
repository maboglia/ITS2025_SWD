package repos;

import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
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
	
	private Connessione connessione = new Connessione();
	
	private Statement statement;//un contenitore per istruzioni sql
	
	private ResultSet rs;//un contenitore per risultati
	
	public FilmDAO() {
		this.films = new HashMap<>();
		inizializzaMappaFilm();
	}
	
	private void inizializzaMappaFilm() {
		try {
			
			//1 uso la connessione per creare uno statement
			statement = connessione.getConn().createStatement();
			//2preparo la query
			String query = "SELECT * FROM IMDB_top_top250";
			//3 eseguo la query e memorizzo i risultati
			rs = statement.executeQuery(query);
			//4 faccio un ciclo while per usare i risultati della query
			while(rs.next()) {
				Film f = new Film();//inizializzo l'oggetto Film f
				f.setId(rs.getInt("id"));//inizializzo le props
				f.setTitle(rs.getString("title"));
				f.setRating(rs.getDouble("rating"));
				f.setYear(rs.getInt("year"));
				
				films.put(f.getId(), f);
			}
			
			
		} catch (SQLException e) {
			System.err.println("C'è un errore nella query: " + e.getMessage());
		}
	}
	
	
	public void addFilm(Film f) {
		films.put(f.getId(), f);
	}
	
	public Film getFilmById(int id) {
		return this.films.get(id);
	}
	
	public Collection<Film> getFilms(){
		return this.films.values();
	}
	
}
