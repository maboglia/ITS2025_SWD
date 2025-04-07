package test;

import java.io.File;
import java.io.FileNotFoundException;
import java.io.PrintWriter;
import java.util.Scanner;

import controller.MagazzinoCtrl;
import model.Prodotto;
import view.ProdottiView;

public class NegozioDemo {

	public static void main(String[] args) throws FileNotFoundException {
		Prodotto p1 = new Prodotto(1, "maglia", "abbigliamento", 10, 10);
		Prodotto p2 = new Prodotto(2, "giacca", "abbigliamento", 30, 5);
		Prodotto p3 = new Prodotto(3, "pantalone", "abbigliamento", 15, 5);

		MagazzinoCtrl ctrl = new MagazzinoCtrl("ITS");
		
		ctrl.addProdotto(p1);
		ctrl.addProdotto(p2);
		ctrl.addProdotto(p3);
		
		ProdottiView view = new ProdottiView();
		
		File sorgente = new File("C:\\Users\\m.bogliaccino\\Desktop\\prodotti.csv");
		File f = new File("C:\\Users\\m.bogliaccino\\Desktop\\prodotti.html");

		PrintWriter stampante = new PrintWriter(f);
		
		Scanner scanner = new Scanner(sorgente);
		
		while (scanner.hasNextLine()) {
			String riga = scanner.nextLine();
			String[] pezziDiRiga = riga.split(",");
			int id = Integer.parseInt(pezziDiRiga[0]);
			String nome = pezziDiRiga[1];
			String categoria = pezziDiRiga[2];
			double prezzo = Double.parseDouble(pezziDiRiga[3]);
			int giacenza = Integer.parseInt(pezziDiRiga[4]);
			
			Prodotto p = new Prodotto(id, nome, categoria, prezzo, giacenza);
			ctrl.addProdotto(p);
			
		}
		
		
		for (Prodotto p : ctrl.getProdotti()) {
			System.out.println(p);
			stampante.println(view.cardProdotto(p));
		}
		stampante.close();
		System.out.println("Processo di scrittura terminato!");
	}

}
