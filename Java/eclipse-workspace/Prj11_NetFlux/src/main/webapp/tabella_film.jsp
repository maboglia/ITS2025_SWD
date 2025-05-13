<!DOCTYPE html>
<%@page import="entities.Film"%>
<%@page import="java.util.List"%>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
</head>
<body>

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
		    <td><%= f.getTitle() %></td>
		    <td><%= f.getRating() %></td>
		    <td><%= f.getYear() %></td>
		  </tr>
	<% } %>
	</table>


</body>
</html>