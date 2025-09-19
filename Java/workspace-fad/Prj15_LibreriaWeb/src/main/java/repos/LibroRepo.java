package repos;

import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
import java.util.ArrayList;
import java.util.List;

import model.Libro;

class Connessione{
	
	private final String HOST = "jdbc:mysql://localhost/libreria";
	private final String USER = "ITS_2025";
	private final String PASS = "ITS_2025";
	
	private Connection conn;
	
	private void connetti() {
		try {
			
			Class.forName("com.mysql.cj.jdbc.Driver");
			
			this.conn = DriverManager.getConnection(HOST, USER, PASS);
		} catch (SQLException e) {
			System.err.println("Si è verificato un errore " + e.getMessage());
		} catch (ClassNotFoundException e) {
			// TODO Auto-generated catch block
			e.printStackTrace();
		}
	}
	
	public Connection getConn() {
		if (conn == null) connetti();
		return conn;
	}
	
	
}



public class LibroRepo {

	private Connessione db;
	private Connection conn;
	
	public LibroRepo() {
		this.db = new Connessione();
		this.conn = this.db.getConn();
		
	}
	
	public List<Libro> getLibri(){
		List<Libro> libri = new ArrayList<>();
		
		try {
			Statement query = this.conn.createStatement();
			ResultSet results = query.executeQuery("SELECT * FROM libro");
			
			while(results.next()) {
				
				Libro l = new Libro();
				l.setId(results.getInt("id"));
				l.setTitolo(results.getString("titolo"));
				l.setPagine(results.getInt("pagine"));
				l.setPrezzo(results.getDouble("prezzo"));
				l.setEditoreId(results.getInt("editore_id"));
				libri.add(l);
				
			}
			
			
			
		} catch (SQLException e) {
			// TODO Auto-generated catch block
			e.printStackTrace();
		}
		
		
		return libri;
	}
	
	
	
	
	
	
	
	
	
}
