

package javaapplication10;

import java.util.Enumeration;
import java.util.Properties;

public class JavaApplication10 {

    
    public static void main(String[] args) {
        Properties prop = System.getProperties();
        
        //for (Object obj : prop)
        
        Enumeration en = prop.keys();
        
        while(en.hasMoreElements()){
            Object key = en.nextElement();
            Object val=prop.get(key);
            
            System.out.println(key+"\t\t"+val);
        }
    }
    
}
