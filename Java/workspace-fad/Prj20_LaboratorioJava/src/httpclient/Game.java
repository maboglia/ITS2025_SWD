package httpclient;

import com.google.gson.annotations.SerializedName;

public record Game(
		@SerializedName("Game") String game, 
		@SerializedName("Genre") String genre, 
		@SerializedName("Publisher") String publisher, 
		@SerializedName("Original platform(s)[a]") String platform, 
		int year) {}
