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
public class JavaApplication1 {

    /**
     * @param args the command line arguments
     */
    static String getBinary(int num) {
        StringBuilder sb=new StringBuilder();
        for(int i=0; i<32; i++){
            sb.append(((num&1)==1)?1:0);
            num>>=1;
            if (i==7 || i==15 || i==23) sb.append(' ');
        }
        sb.reverse();
        return sb.toString();
    } 

        
        public static void main(String[] args) {
        int year=1999;
        int dayNum =91;
        int [] daysInMonths={31,28,31,30,31,30,31,31,30,31,30,31};
        String []months={"январь","февраль","март","апрель","май","июнь","июль","август","сентябрь","октябрь","ноябрь","декабрь"};
        
        int monthNum=0;
        boolean isLeapYear=(year%4==0)&& (year%100!=0 || year%400==0);
        
            for(int days : daysInMonths){
                if (isLeapYear && days==28) ++days;
                if (dayNum<=days) break;
                
                dayNum -=   days;
                monthNum++;
            }
        //System.out.printf("%d %s \n", dayNum, months[monthNum]);
    System.out.printf(getBinary(56));
    }
    
}
