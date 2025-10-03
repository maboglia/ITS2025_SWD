package debug;

import static org.junit.jupiter.api.Assertions.*;

import org.junit.jupiter.api.BeforeEach;
import org.junit.jupiter.api.Test;

public class CalcolatriceTest {

	@BeforeEach
	void salutaPrima() {
		System.out.println("Buon inizio di test");
	}
	
	@Test
	void testDuePiuDue(){
		Calcolatrice c = new Calcolatrice();
		double addizione = c.addizione(2, 2);
		assertEquals(4, addizione);
	}
	@Test
	void testTrePiuDueFaCinque(){
		Calcolatrice c = new Calcolatrice();
		double addizione = c.addizione(3, 2);
		assertEquals(5, addizione);
	}

	
	
}
