
package myjni;

import java.util.Random;

public class Test {
    public native double add(double a, double b);
    
    public int someSolt(int seed,int max){
        return (new Random(seed)).nextInt(max);
    }
}
