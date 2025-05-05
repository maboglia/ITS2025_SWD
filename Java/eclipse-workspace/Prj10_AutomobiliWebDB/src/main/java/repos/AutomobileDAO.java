package repos;

import java.util.HashMap;
import java.util.Map;

import model.Automobile;

public class AutomobileDAO {

	public Map<Integer, Automobile> getAutomobili(){
		
		Map<Integer, Automobile> mappa = new HashMap<>();//creo la mappa
		
		Automobile auto1 = new Automobile();//creo l'oggetto auto1
		auto1.setId(1); //inizializzo le proprietà
		auto1.setMarca("BMW");
		auto1.setModello("X5");
		auto1.setCilindrata(3500);
		auto1.setPosti(5);
		auto1.setPrezzo(12000);
		
		mappa.put(auto1.getId(), auto1);//aggiungo l'oggetto alla mappa
		
		return mappa;//ritorno la mappa piena di auto
	}
	
	
}
