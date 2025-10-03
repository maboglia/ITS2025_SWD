
<%@page import="model.Prodotto"%>
<%@page import="java.util.List"%>
<table>
  <tr>
    <th>Nome</th>
    <th>Categoria</th>
  </tr>

<% List<Prodotto> prodotti = (List<Prodotto>) request.getAttribute("prodotti"); %>

<% for(Prodotto p : prodotti){ %>

  <tr>
    <td><%= p.nome() %></td>
    <td><%= p.categoria() %></td>
  </tr>

<% }  %>

</table>
