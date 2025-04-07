package model;

import java.time.LocalDate;
import java.time.LocalTime;

public class Todo {

	private String description;
	private LocalDate date;
	private LocalTime time;
	private boolean done;
	
	public Todo(String description) {
		this.description = description;
		this.date = LocalDate.now();
		this.time = LocalTime.now();
		this.done = false;
	}

	public String getDescription() {
		return description;
	}

	public void setDescription(String description) {
		this.description = description;
	}

	public LocalDate getDate() {
		return date;
	}

	public void setDate(LocalDate date) {
		this.date = date;
	}

	public LocalTime getTime() {
		return time;
	}

	public void setTime(LocalTime time) {
		this.time = time;
	}

	public boolean isDone() {
		return done;
	}

	public void setDone(boolean done) {
		this.done = done;
	}

	@Override
	public String toString() {
		return "Todo ["
				+ "description=" + description 
				+ ", date=" + date 
				+ ", time=" + time 
				+ ", done=" + done 
				+ "]";
	}
	
	
	
	
}
