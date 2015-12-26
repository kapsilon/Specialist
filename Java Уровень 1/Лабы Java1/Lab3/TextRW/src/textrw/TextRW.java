/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

package textrw;

import java.io.*;
import java.util.ArrayList;
import java.util.StringTokenizer;
 

/**
 *
 * @author student
 */
public class TextRW {
    
    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) throws IOException {
 /*       BufferedReader br = new BufferedReader(new InputStreamReader(
                new FileInputStream("ascii.txt"),"Cp1251"));
    
       String line; 
    do {
        line=br.readLine();
        if(line!=null) System.out.println(line);
    }
    while(line!=null);
    br.close();*/
    
    //write("data.txt", new double[]{1.1,2,4,35.09,1.01});    
    double[]d=read("data.txt");  
    
    for (double di :d)
    {
        System.out.println(di);
    }
        
    }
    
    static void write(String fname,double[]d) throws IOException{
     BufferedWriter bw =new BufferedWriter(new FileWriter(fname,true));
        
     for(double di : d) bw.write(Double.toString(di)+" ");
     bw.close();
    }            
    
    static double[] read(String s) throws IOException{
        BufferedReader br = new BufferedReader(new FileReader(s));
        
        String line;
        ArrayList list =new ArrayList ();
        
        do{
            line = br.readLine();
        if (line!=null){
 
//            String[] words = line.split("\\s+");
//        
//          for(String wi : words) {
//              System.out.println(wi);
//          }
            
            StringTokenizer st =new StringTokenizer(line);
            while (st.hasMoreTokens()){
                list.add(st.nextToken());
            }
        }       
        }while(line!=null);
        
        double [] d=new double[list.size()];
        
        for(int i=0; i<d.length;i++) 
            d[i]=Double.parseDouble((String)list.get(i));
        
        br.close();
        return d;
    }
}
