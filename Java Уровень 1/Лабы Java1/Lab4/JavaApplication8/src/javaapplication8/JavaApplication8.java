/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

package javaapplication8;

import java.util.*;

/**
 *
 * @author student
 */
public class JavaApplication8 {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        GregorianCalendar day = (GregorianCalendar)Calendar.getInstance();
        
        //System.out.println(day.get(Calendar.YEAR));
        
        Formatter fmt =new Formatter();
        
        fmt.format("Short date format: %tD\n", day);
// Display date using full names.
fmt.format("Long date format: ");
fmt.format(Locale.JAPAN,"%tA %1$tB %1$td, %1$tY\n", day);

//System.out.println(fmt);
        
       BitSet a = new BitSet();
       
       a.set(0);
       a.set(2);
        
       System.out.println(a.size());
       System.out.println(a.length());
       
       BitSet b = new BitSet(100);
       
       b.set(12);
       
        System.out.println(b.size());
       System.out.println(b.length());
       
       
       a.or(b);
       
       System.out.println(a.size());
       System.out.println(a.length());
       
       System.out.println(a);
       
    }
    
}
