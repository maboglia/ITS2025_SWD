package controller;

import jakarta.servlet.ServletException;
import jakarta.servlet.annotation.WebServlet;
import jakarta.servlet.http.HttpServlet;
import jakarta.servlet.http.HttpServletRequest;
import jakarta.servlet.http.HttpServletResponse;
import services.AutomobileService;

import java.io.IOException;

import org.json.JSONArray;

/**
 * Servlet implementation class AutosaloneREST
 */
@WebServlet("/api")
public class AutosaloneREST extends HttpServlet {

	private AutomobileService service = new AutomobileService();

	protected void doGet(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {

		JSONArray array = new JSONArray(service.getAutomobili());
		
		response.setContentType("application/json");
		
		response.getWriter().print(array.toString());
	}

}
