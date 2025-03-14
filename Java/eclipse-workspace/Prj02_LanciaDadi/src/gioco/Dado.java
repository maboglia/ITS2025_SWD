package gioco;

public class Dado {//PascalCase

	int facce = 6;
	
	int valoreFacciaSuperiore = 1; //camelCase - variabili
	
	void lanciaDado() {//camelCase() - metodi()
		
		valoreFacciaSuperiore = (int) (Math.random() * facce) + 1 ;//1<=6
		
	}
	
}
