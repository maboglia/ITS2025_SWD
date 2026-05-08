import java.util.ArrayList;
import java.util.Arrays;
import java.util.Collections;
import java.util.Comparator;
import java.util.List;

class Libro implements Comparable<Libro>{
    String titolo;
    int pagine;
    double prezzo;
    
    @Override
    public int compareTo(Libro o) {
        return this.pagine - o.pagine;
    }

    @Override
    public String toString() {
        return "Libro [titolo=" + titolo + ", pagine=" + pagine + ", prezzo=" + prezzo + "]";
    }
    
}


public class App {
    public static void main(String[] args) throws Exception {
        
        List<String> frutti = new ArrayList<>();

        frutti.add("mele");
        frutti.add("pere");
        frutti.add("banane");
        frutti.add("fragole");
        frutti.add("mirtilli");
        frutti.add("lamponi");

        //Collections.sort(frutti);

//        Comparator<Libro> cp = (o1, o2) -> Double.compare(o1.prezzo, o2.prezzo);
                 
            

        Libro l1 = new Libro();
        l1.titolo = "Ma che freddo fa";
        l1.prezzo = 25;
        l1.pagine = 100;

        Libro l2 = new Libro();
        l2.titolo = "Fa caldo invece";
        l2.prezzo = 15;
        l2.pagine = 200;

        Libro l3 = new Libro();
        l3.titolo = "Zio fa che freddo fa";
        l3.prezzo = 55;
        l3.pagine = 80;

        List<Libro> libri = List.of(l1, l2, l3);

        libri
            .stream()
            .sorted((o1, o2) -> Double.compare(o2.prezzo, o1.prezzo))
            .forEach(f -> System.out.println(f));

        
        
        System.out.println("Programma terminato!");
    }
}
