package controller;

import jakarta.servlet.ServletException;
import jakarta.servlet.annotation.WebServlet;
import jakarta.servlet.http.HttpServlet;
import jakarta.servlet.http.HttpServletRequest;
import jakarta.servlet.http.HttpServletResponse;
import services.FilmService;

import java.io.IOException;
import java.util.List;

import org.json.JSONArray;

import entities.Film;

@WebServlet("/api/films")
public class FilmREST extends HttpServlet {
	private static final long serialVersionUID = 1L;

	private FilmService service = new FilmService();
	
	
	protected void doGet(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		
		List<Film> films = service.getFilms();
		
		JSONArray array = new JSONArray(films);
		
		response.setContentType("application/json");
		response.getWriter().append(array.toString());
		
		
	}

}
