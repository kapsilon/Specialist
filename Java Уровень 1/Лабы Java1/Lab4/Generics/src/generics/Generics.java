
package generics;

import java.util.*;

class Goods implements Comparable<Goods> {
    int code;
    double price;
    String name;
    
    Goods(int c,double p, String s){
        if(p<0) throw new IllegalArgumentException();
        code=c; price=p; name=s;}

    @Override
    public int compareTo(Goods g) {
        if (price>g.price) return 1;
        else if(price<g.price) return -1;
        else return 0;
    }

    @Override
    public String toString() {
        return name+" "+price+" "+code; 
    }
        
   
    
}

class CompGoodsByCode implements Comparator<Goods>{

    @Override
    public int compare(Goods g1, Goods g2) {
        return g1.code-g2.code;
    }
    
}

public class Generics {

    static <T extends Comparable<? super T>> T max2(T a, T b){
        T max=a;
                       
        if (a.compareTo(b)<0) max=b;
        return max;
    }
    
    static <T > T max2(T a, T b, Comparator<T> comp){
        T max=a;
                       
        if (comp.compare(a, b) <0) max=b;
        return max;
    }
    
    public static void main(String[] args) {
//        ArrayList badList=new ArrayList();
//        badList.add("ghghg");
//        badList.add(new double[4]);
        
       System.out.println(max2(3,8)); 
       System.out.println(max2("abx","abj")); 
       System.out.println(max2(new MyGoods(3,88.1,"coffee"),
               new MyGoods(1,89.1,"Test"),new CompGoodsByCode() )); 
       
       System.out.println(max2(new MyGoods(3,88.1,"coffee"),
               new MyGoods(1,89.1,"Test") )); 
        
        ArrayList<String> list=new ArrayList<String>();
        list.add("fdhfgh");
        //list.add(454);
        
        
        
    }
    
}
