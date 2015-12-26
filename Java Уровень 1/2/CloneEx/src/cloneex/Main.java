package cloneex;

public class Main {

    public static void main(String[] args) {
        Deep p1=new Deep();
        Deep p2=(Deep)p1.clone();

        if (p1==p2)           System.out.println("p "+true);
        if (p1.name==p2.name) System.out.println("name "+true);
        if (p1.num==p2.num)   System.out.println("num "+true);
    }
}
