package model;

public class Prodotto extends Object{

	private int id;
	private String nome;
	private String categoria;
	private double prezzo;
	private int giacenza;
	
	public Prodotto(int id, String nome, String categoria, double prezzo, int giacenza) {
		//super();
		this.id = id;
		this.nome = nome;
		this.categoria = categoria;
		this.prezzo = prezzo;
		this.giacenza = giacenza;
	}
	public int getId() {
		return id;
	}
	public void setId(int id) {
		this.id = id;
	}
	public String getNome() {
		return nome;
	}
	public void setNome(String nome) {
		this.nome = nome;
	}
	public String getCategoria() {
		return categoria;
	}
	public void setCategoria(String categoria) {
		this.categoria = categoria;
	}
	public double getPrezzo() {
		return prezzo;
	}
	public void setPrezzo(double prezzo) {
		this.prezzo = prezzo;
	}
	public int getGiacenza() {
		return giacenza;
	}
	public void setGiacenza(int giacenza) {
		this.giacenza = giacenza;
	}
	@Override
	public String toString() {
		return "Prodotto [nome=" + nome + ", prezzo=" + prezzo + "]";
	}
	
	
	
}
