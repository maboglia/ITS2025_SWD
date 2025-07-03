package com.maboglia.services;

import java.util.List;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import com.maboglia.entities.Automobile;
import com.maboglia.entities.Moto;
import com.maboglia.repos.AutomobileRepo;
import com.maboglia.repos.MotoRepo;

@Service
public class AutosaloneServiceImpl implements AutosaloneService{

	@Autowired
	private AutomobileRepo repo;
	
	@Autowired
	private MotoRepo repoMoto;
	
	@Override
	public List<Automobile> getAutomobili() {
		
		return repo.findAll();
	}

	@Override
	public List<Moto> getMoto() {
		return repoMoto.findAll();
	}

	@Override
	public Automobile addAutomobile(Automobile a) {
		return repo.save(a);
	}

	@Override
	public Moto addMoto(Moto m) {
		return repoMoto.save(m);
	}

}
