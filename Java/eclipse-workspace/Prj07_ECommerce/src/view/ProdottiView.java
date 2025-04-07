package view;

import model.Prodotto;

public class ProdottiView {

	public String cardProdotto(Prodotto p) {
		String output = "";
		
		output += "<div>\n";
		output += p.getNome() + "\n";
		output += "</div>\n";
		
		return output;
		
		
	}
	
	
}
