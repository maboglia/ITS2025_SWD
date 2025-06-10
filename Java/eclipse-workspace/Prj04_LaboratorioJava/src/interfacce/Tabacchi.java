package interfacce;

public class Tabacchi implements Contratto, ContrattoAssicurazione, ContrattoMarker{

	@Override
	public String regola1() {
		// TODO Auto-generated method stub
		return "Benvenuto in tabaccheria " + MESSAGGIO;
	}

	@Override
	public void regola2() {
		// TODO Auto-generated method stub
		System.out.println("Vendo tabacco");
	}

	@Override
	public String protezione() {
		// TODO Auto-generated method stub
		return "chiudo la porta";
	}

}
