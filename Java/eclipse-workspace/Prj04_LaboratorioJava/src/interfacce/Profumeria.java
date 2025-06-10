package interfacce;

public class Profumeria implements Contratto, ContrattoMarker {

	@Override
	public String regola1() {
		// TODO Auto-generated method stub
		return "ho rispettato la regola1 " + MESSAGGIO;
	}

	@Override
	public void regola2() {
		System.out.println("Vendo profumi");
		
	}

}
