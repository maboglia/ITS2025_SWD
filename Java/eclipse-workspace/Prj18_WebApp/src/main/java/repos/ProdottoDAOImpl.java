package repos;

import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
import java.util.ArrayList;
import java.util.List;

import model.Prodotto;

public class ProdottoDAOImpl implements ProdottoDAO {

	private final String HOST = "jdbc:mysql://localhost:3306/esercitazioni";
	private final String USER = "root";
	private final String PASS = "bogliaccino";
	
	private Connection connessione = null;
	private Statement statement = null;
	private PreparedStatement ps = null;
	private ResultSet rs = null;
	
	public ProdottoDAOImpl() {
		this.connetti();
	}
	
	private void connetti() {
		try {
			this.connessione = DriverManager.getConnection(HOST, USER, PASS);
			System.out.println("Connesso al DB");
		} catch (SQLException e) {
			System.err.println("Errore di connessione al Database");
			System.err.println(e.getMessage());
		}
	}
	
	@Override
	public List<Prodotto> getProdotti() {
		
		List<Prodotto> prodotti = new ArrayList<>();
		
		try {
			this.statement = this.connessione.createStatement();
			this.rs = this.statement.executeQuery(FIND_ALL);
			
			while(this.rs.next()) {
				int id = rs.getInt("id");
				String nome = rs.getString("nome");
				String categoria = rs.getString("categoria");
				
				prodotti.add(new Prodotto(id, nome, categoria));
			}
			
		} catch (SQLException e) {
			// TODO Auto-generated catch block
			e.printStackTrace();
		}
		
		return prodotti;
	}

	@Override
	public Prodotto getProdottoById(int id) {
		// TODO Auto-generated method stub
		return null;
	}

}
