/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

package javaapplication1;

/**
 *
 * @author student
 */
public class Javaapplication1 {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
            
        SimpleParser obj=new SimpleParser( );
        obj.Parse(args);
        System.out.println(obj.getInFile()); 
        System.out.println(obj.getOutFile()); 
    }
    
}
