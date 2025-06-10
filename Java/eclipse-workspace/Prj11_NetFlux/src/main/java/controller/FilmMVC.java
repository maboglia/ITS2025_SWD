package controller;

import jakarta.servlet.ServletException;
import jakarta.servlet.annotation.WebServlet;
import jakarta.servlet.http.HttpServlet;
import jakarta.servlet.http.HttpServletRequest;
import jakarta.servlet.http.HttpServletResponse;
import services.FilmService;

import java.io.IOException;
import java.util.List;

import entities.Film;

@WebServlet("/films")
public class FilmMVC extends HttpServlet {
	
	private FilmService service;
	
	public FilmMVC() {
		this.service = new FilmService();
	}

	protected void doGet(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		//mi procuro i film chiedendoli al service
		List<Film> films = service.getFilms();
		//aggiungo i film all'oggetto request
		request.setAttribute("films", films);
		
		//includo l'header del sito
		request.getRequestDispatcher("header.jsp").include(request, response);
		
		
		//chiamo la pagina jsp passandole i dati dei film
		request
			.getRequestDispatcher("tabella_film.jsp")//smistare request
			
			.include(request, response);//include in questo punto la pagina
			//.forward(request, response);//redirige alla pagina
		
		//includo il footer del sito
		request.getRequestDispatcher("footer.jsp").include(request, response);
		
		
	}

	protected void doPost(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		// TODO Auto-generated method stub
		doGet(request, response);
	}

}
