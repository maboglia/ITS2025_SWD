package httpclient;

import java.io.IOException;
import java.lang.reflect.Type;
import java.net.URI;
import java.net.URISyntaxException;
import java.net.http.HttpClient;
import java.net.http.HttpRequest;
import java.net.http.HttpResponse;
import java.util.List;
import java.util.Map;
import java.util.stream.Collectors;

import com.google.gson.Gson;
import com.google.gson.reflect.TypeToken;

public class HttpClientDemo {

	public static void main(String[] args) throws URISyntaxException, IOException, InterruptedException {
		
		HttpClient client = HttpClient.newHttpClient();

		String url = "https://www.bogliaccino.it/api/public/film.php?type=games";

		HttpRequest request = HttpRequest
			.newBuilder()
			.uri(new URI(url))
			.GET()
			.build();
		
		HttpResponse<String> response = client
				.send(request, HttpResponse.BodyHandlers.ofString());
		
//		System.out.println("Codice risposta: " + response.statusCode());
//		System.out.println("Corpo risposta: " + response.body());
		
		Gson json = new Gson();
		
		//Game g = new Game("minecraft", "costruisci", "microsoft", "tutte", "2011");
		
//		String gioco = json.toJson(g);
//		
//		System.out.println(g);
//		System.out.println(gioco);
		
//		Type tipoContenitoreGiochi = new TypeToken<List<Game>>() {}.getType();
		Type tipoContenitoreGiochi = TypeToken.getParameterized(List.class, Game.class).getType();

		
		List<Game> listaGiochi = json.fromJson(response.body(), tipoContenitoreGiochi);
		
//		listaGiochi
//			.stream()
//			.forEach(gioco -> System.out.println(gioco));
		
		List<String> publishers = listaGiochi
			.stream()
			.map(gioco -> gioco.publisher())
			.distinct()
			.sorted()
			.toList();
		
		//publishers.forEach(System.out::println);
		
		Map<String, List<String>> gamesByPublisher = listaGiochi
														.stream()
														.collect(Collectors.groupingBy(
																Game::publisher,
																Collectors.mapping(Game::game, Collectors.toList())
																));
		
		gamesByPublisher.forEach( (key, value) -> {
			System.out.println("Il publisher: " + key);
			System.out.println("Ha pubblicato: " + value.size() + " giochi");
		} );
		
		
	}

}
