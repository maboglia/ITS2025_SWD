package com.maboglia.services;

import java.util.List;

import com.maboglia.entities.Automobile;
import com.maboglia.entities.Moto;

public interface AutosaloneService {


	Automobile addAutomobile(Automobile a);
	List<Automobile> getAutomobili();

	
	Moto addMoto(Moto m);
	List<Moto> getMoto();
	
}
