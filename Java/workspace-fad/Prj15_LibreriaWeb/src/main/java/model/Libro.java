package model;

public class Libro {

	private int id;
    private String titolo;
    private int pagine;
    private double prezzo;
    private int editoreId;
    
	public int getId() {
		return id;
	}
	public void setId(int id) {
		this.id = id;
	}
	public String getTitolo() {
		return titolo;
	}
	public void setTitolo(String titolo) {
		this.titolo = titolo;
	}
	public int getPagine() {
		return pagine;
	}
	public void setPagine(int pagine) {
		this.pagine = pagine;
	}
	public double getPrezzo() {
		return prezzo;
	}
	public void setPrezzo(double prezzo) {
		this.prezzo = prezzo;
	}
	public int getEditoreId() {
		return editoreId;
	}
	public void setEditoreId(int editoreId) {
		this.editoreId = editoreId;
	}
    
    
    
}

