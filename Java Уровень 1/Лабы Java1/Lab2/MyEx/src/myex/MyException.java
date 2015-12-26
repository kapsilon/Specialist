/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

package myex;

/**
 *
 * @author student
 */
public class MyException extends Exception{
    int errCode;
    
    public MyException(String msg, int code){
     super(msg);
     errCode=code;
    }
    public MyException(String msg, Throwable cause, int code){
    super(msg,cause);
    errCode=code;
    }
    
    public void printMessage(){
        String cause;
        if (getCause()!=null) cause=getCause().getClass().getSimpleName();
                else cause="";
    System.out.println("msg+cause+code " + getMessage() + " "+ cause + " "+errCode );
    }
}
