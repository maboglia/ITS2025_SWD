package services;

import java.util.List;

import model.Libro;
import repos.LibroRepo;

public class LibroServiceImpl implements LibroService {

	private LibroRepo repo;
	
	public LibroServiceImpl() {
		this.repo = new LibroRepo();
	}
	
	@Override
	public List<Libro> getLibri() {
		return repo.getLibri();
	}

}
