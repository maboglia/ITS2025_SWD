package demo;

import java.util.List;
import java.util.Scanner;

import controller.TodoCtrl;
import model.Todo;

public class Demo {

	public static void main(String[] args) {

		Scanner input = new Scanner(System.in);
		TodoCtrl ctrl = new TodoCtrl();
		boolean gira = true;
		
		while (gira) {
			
			System.out.println("Scegli azione");
			System.out.println("1) add Todo");
			System.out.println("2) lista Todo");
			System.out.println("0) esci da Todo");
			
			String risposta = input.nextLine();
			
			if (risposta.equals("0")) {
				gira = false;
			} else if (risposta.equals("1")) {
				aggiungiCosa(input, ctrl);
			} else if (risposta.equals("2")) {
				stampaTutto(ctrl);
			} else {
				System.out.println("Scelta non disponibile!");
			}
		}
		
		System.out.println("Programma terminato.");
		System.out.println("Nechainikov Prod.");

		

	}

	private static void stampaTutto(TodoCtrl ctrl) {
		//logica per stampare tutti i todo
		List<Todo> todos = ctrl.getTodos();
		for (Todo todo : todos) {
			System.out.println(todo);
		}
	}

	private static void aggiungiCosa(Scanner input, TodoCtrl ctrl) {
		//logica per aggiungere nuovi todo
		System.out.println("Cosa devi fare?");
		String cosaDaFare = input.nextLine();
		ctrl.addTodo(cosaDaFare);
	}

}
