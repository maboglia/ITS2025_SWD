<!DOCTYPE html>
<%@page import="model.Libro"%>
<%@page import="java.util.List"%>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.min.css"
>
</head>
<body>
    
    <div class="container">
        <h1>Libri</h1>
        <table>
            <thead>
                <tr>
                    <th>Titolo</th>
                    <th>Pagine</th>
                    <th>Prezzo</th>
                    <th>Editore</th>
                </tr>
            </thead>
            <% List<Libro> libri = (List<Libro>) request.getAttribute("libri"); %>
            <tbody>
                <% for (Libro l : libri){ %>
                <tr>
                    <td><%= l.getTitolo() %></td>
                    <td><%= l.getPagine() %></td>
                    <td><%= l.getPrezzo() %></td>
                    <td><%= l.getEditoreId() %></td>
                </tr>
                <%  }  %>
            </tbody>

        </table>
    </div>

</body>
</html>