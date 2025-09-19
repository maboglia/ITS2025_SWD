package controller;

import java.io.IOException;
import java.util.List;

import jakarta.servlet.ServletException;
import jakarta.servlet.annotation.WebServlet;
import jakarta.servlet.http.HttpServlet;
import jakarta.servlet.http.HttpServletRequest;
import jakarta.servlet.http.HttpServletResponse;
import model.Libro;
import services.LibroService;
import services.LibroServiceImpl;

@WebServlet("/libri")
public class LibreriaMVC extends HttpServlet {

	private LibroService service;
	
	public LibreriaMVC() {
		this.service = new LibroServiceImpl();
	}

	@Override
	protected void doGet(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		
		List<Libro> libri = this.service.getLibri();
		
		request.setAttribute("libri", libri);
		
		request.getRequestDispatcher("libri.jsp").include(request, response);
		
		
	}
	
	
	
}
