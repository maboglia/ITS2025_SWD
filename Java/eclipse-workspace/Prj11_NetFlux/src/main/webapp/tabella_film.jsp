<%@page import="entities.Film"%>
<%@page import="java.util.List"%>


	<h1>Film</h1>

	<table>
	  <tr>
	    <th>Titolo</th>
	    <th>Valutazione</th>
	    <th>Anno</th>
	  </tr>
<!-- queste righe si devono ripetere foreach film -->
<% List<Film> films = (List<Film>) request.getAttribute("films");  %>
	<% for(Film f : films) { %>
		  <tr>
		    <td><a target="_blank" href="https://www.google.com/search?q=<%= f.getTitle() %>"> <%= f.getTitle() %> </a></td>
		    <td><%= f.getRating() %></td>
		    <td><%= f.getYear() %></td>
		  </tr>
	<% } %>
	</table>

