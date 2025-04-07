package view;

import java.util.List;

import model.Todo;

public class TodoView {

	public String listTodo(List<Todo> todos) {
		
		String risposta = "";
		
		for (Todo todo : todos) {
			risposta += todo + "\n";
		}
		
		return risposta;
	}
	
}
