package controller;

import java.io.IOException;

import jakarta.servlet.ServletException;
import jakarta.servlet.annotation.WebServlet;
import jakarta.servlet.http.HttpServlet;
import jakarta.servlet.http.HttpServletRequest;
import jakarta.servlet.http.HttpServletResponse;
import services.FilmService;

@WebServlet("/serie")
public class SerieMVC extends HttpServlet {

	private FilmService service;
	
	@Override
	protected void doPost(HttpServletRequest req, HttpServletResponse resp) throws ServletException, IOException {

		System.out.println("Chiamata post");
		
		resp.getWriter().append("funziona");
//		if (req.getParameter("title")!=null) {
//			
//			String title = req.getParameter("title");
//			int year = Integer.parseInt(req.getParameter("year"));
//			double rating = Double.parseDouble(req.getParameter("rating"));
//			service.addSerie(title, rating, year);
//			
//		}

	}
	
}
