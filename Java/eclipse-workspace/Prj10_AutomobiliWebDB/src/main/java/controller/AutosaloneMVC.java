package controller;

import java.io.IOException;
import java.util.List;

import jakarta.servlet.ServletException;
import jakarta.servlet.annotation.WebServlet;
import jakarta.servlet.http.HttpServlet;
import jakarta.servlet.http.HttpServletRequest;
import jakarta.servlet.http.HttpServletResponse;
import model.Automobile;
import services.AutomobileService;

@WebServlet("/automobili")
public class AutosaloneMVC extends HttpServlet {

	private AutomobileService service = new AutomobileService();
	
	@Override
	protected void doGet(HttpServletRequest richiesta, HttpServletResponse risposta) throws ServletException, IOException {

		List<Automobile> automobili = service.getAutomobili();
		
		risposta.setContentType("text/html");
		
		risposta.getWriter().print("<ul>");
		
		for (Automobile auto : automobili) {
			risposta.getWriter().print("<li>");
			risposta.getWriter().print("Marca: " + auto.getMarca());
//			risposta.getWriter().print("Modello: " + auto.getModello());
//			risposta.getWriter().print("Prezzo: " + auto.getPrezzo());
			risposta.getWriter().print("</li>");			
		}
		risposta.getWriter().print("</ul>");		
		
	
	}
	
}
