/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

package myex;

import java.io.IOException;
import java.sql.SQLTimeoutException;



/**
 *
 * @author student
 */
public class MyEx {

   static void Solve(int n) throws MyException {
       int rez;
       
       switch(n)
       {
           case 1: rez=1/0;
           case 2: throw new IllegalArgumentException("плохие параметры");
               
           default:throw new MyException("error text",new IOException(),1278);
       }
   }
    public static void main(String[] args) {
        try {
            Class.forName("java.lang.Integer");
            Solve(3);
        } catch (ClassNotFoundException ex) {
            ex.printStackTrace();
        }
        catch(ArithmeticException ex){
            System.out.println("Деленине на 0");
        }
        catch(MyException ex){ex.printMessage();}
    }
    
}
