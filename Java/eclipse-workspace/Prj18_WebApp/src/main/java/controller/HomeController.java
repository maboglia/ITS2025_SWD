package controller;

import java.io.IOException;
import java.io.PrintWriter;
import java.util.List;

import jakarta.servlet.RequestDispatcher;
import jakarta.servlet.ServletException;
import jakarta.servlet.annotation.WebServlet;
import jakarta.servlet.http.HttpServlet;
import jakarta.servlet.http.HttpServletRequest;
import jakarta.servlet.http.HttpServletResponse;
import model.Prodotto;
import repos.ProdottoDAO;
import repos.ProdottoDAOImpl;

/**
 * Servlet implementation class HomeController
 */
@WebServlet("/home")
public class HomeController extends HttpServlet {
	
	private final String nomeSito;
	private int counter = 0;
	private ProdottoDAO dao;

    /**
     * Default constructor. 
     */
    public HomeController() {
        this.nomeSito = "SWD software dev";
        this.dao = new ProdottoDAOImpl();
        System.out.println("Servlet home creata");
    }

	/**
	 * @see HttpServlet#doGet(HttpServletRequest request, HttpServletResponse response)
	 */
	protected void doGet(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {

		this.counter++;
		System.out.println("--------------- Richiesta GET -------------");
		String conteggio = String.format("Pagine visitate %s", counter);
		System.out.println(conteggio);
		PrintWriter output = response.getWriter();
		String pagina = "home";
		request.setAttribute("numeroVisite", conteggio);
		
		if (request.getParameter("page")!=null) {
			pagina = request.getParameter("page");
		}
		System.out.println("La pagina richiesta è: " + pagina);
		
		request.getRequestDispatcher("header.jsp").include(request, response);
		
		if (pagina.equals("home")) {
			request.getRequestDispatcher("home.jsp").include(request, response);
		}
		else {
			response.getWriter().print("<h2>" + "La pagina richiesta è: " + pagina + "</h2>");
			final String test = pagina;
			List<Prodotto> list = dao
					.getProdotti()
					.stream()
					.filter(p -> p.categoria().equalsIgnoreCase(test))
					.toList();
			request.setAttribute("prodotti", list);
			request.getRequestDispatcher("tabella_prodotti.jsp").include(request, response);
		}
		
		
		request.getRequestDispatcher("footer.jsp").include(request, response);
		
		//response.sendRedirect("home.jsp?count="+conteggio);
	}

	/**
	 * @see HttpServlet#doPost(HttpServletRequest request, HttpServletResponse response)
	 */
	protected void doPost(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		// TODO Auto-generated method stub
		doGet(request, response);
	}

}
