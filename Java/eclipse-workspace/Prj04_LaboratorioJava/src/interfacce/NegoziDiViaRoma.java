package interfacce;

import java.util.ArrayList;
import java.util.List;

public class NegoziDiViaRoma {
	
	public static void main(String[] args) {
		
	List<Contratto> contrattiAffitto = new ArrayList<>();
	List<ContrattoAssicurazione> contrattiAssicurazione = new ArrayList<>();

	contrattiAffitto.add(new Tabacchi());
	contrattiAffitto.add(new Profumeria());
	contrattiAffitto.add(new Tabacchi());
	contrattiAffitto.add(new Profumeria());
	
	contrattiAssicurazione.add(new Tabacchi());
	contrattiAssicurazione.add(new Tabacchi());
	
	}
	
	
	
	
}
