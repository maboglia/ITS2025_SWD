package httpclient;

import java.util.Objects;

public class Gioco {

	private final String game;
	private final String genre;
	private final String publisher;
	private final String platform;
	private final String year;
	
	public Gioco(String game, String genre, String publisher, String platform, String year) {
		this.game = game;
		this.genre = genre;
		this.publisher = publisher;
		this.platform = platform;
		this.year = year;
	}

	public String getGame() {
		return game;
	}

	public String getGenre() {
		return genre;
	}

	public String getPublisher() {
		return publisher;
	}

	public String getPlatform() {
		return platform;
	}

	public String getYear() {
		return year;
	}

	@Override
	public String toString() {
		return "Gioco [game=" + game + ", genre=" + genre + ", publisher=" + publisher + ", platform=" + platform
				+ ", year=" + year + "]";
	}

	@Override
	public int hashCode() {
		return Objects.hash(game, genre, platform, publisher, year);
	}

	@Override
	public boolean equals(Object obj) {
		if (this == obj)
			return true;
		if (obj == null)
			return false;
		if (getClass() != obj.getClass())
			return false;
		Gioco other = (Gioco) obj;
		return Objects.equals(game, other.game) && Objects.equals(genre, other.genre)
				&& Objects.equals(platform, other.platform) && Objects.equals(publisher, other.publisher)
				&& Objects.equals(year, other.year);
	}
	
	
	
}
