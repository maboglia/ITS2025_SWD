package repos;

import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
import java.util.Map;

import entities.Film;
import entities.Serie;

public class SerieDAO {
	
	private Map<Integer, Serie> series;
	
	private Connessione connessione = new Connessione();
	
	private Statement statement;//un contenitore per istruzioni sql

	private PreparedStatement ps;//un contenitore per istruzioni sql
	
	
	private ResultSet rs;//un contenitore per risultati
	
	public void addSerie(Serie s) {
		
		String query = "INSERT INTO serietv (title, rating, year) values (?,?,?)";

		try {
			ps = connessione.getConn().prepareStatement(query);
			ps.setString(1, s.getTitle());
			ps.setDouble(2, s.getRating());
			ps.setInt(3, s.getYear());
		
			ps.execute();
		
		} catch (SQLException e) {
			// TODO Auto-generated catch block
			e.printStackTrace();
		}
		
	}
	
	
}
