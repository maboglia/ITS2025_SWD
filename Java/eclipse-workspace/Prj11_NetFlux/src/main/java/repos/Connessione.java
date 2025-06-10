package repos;

import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.SQLException;

public class Connessione {

	//parametri per la connessione
	private final String HOST = "jdbc:mysql://localhost:3306/esercitazioni";
	private final String USER = "ITS_2025";
	private final String PASS = "ITS_2025";
	
	private Connection conn = null;
	
	public Connessione() {
		System.out.println("Connessione creata");
	}
	
	public Connection getConn() {
		
		if (conn == null) connetti();
		
		return this.conn;
	}
	
	
	private void connetti() {
		
		try {
			Class.forName("com.mysql.cj.jdbc.Driver");//forziamo il caricamento in memoria
			this.conn = DriverManager.getConnection(HOST, USER, PASS);
			//System.out.println("SEI CONNESSO AL DB!!!!!!!!!!");
		
		} catch (SQLException e) {
			System.err.println("NON SEI CONNESSO AL DB");
			System.err.println(e.getMessage());
		} catch (ClassNotFoundException e) {
			System.err.println("NON HO TROVATO LA CASSE CHE HAI DETTO DI CARICARE");
			System.err.println(e.getMessage());
		} 
		
	}
	
	
}
