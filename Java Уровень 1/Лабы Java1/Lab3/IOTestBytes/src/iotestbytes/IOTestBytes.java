/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

package iotestbytes;

import java.io.*;
import java.util.ArrayList;
/**
 *
 * @author student
 */

// A simple file filter for Java source files.
class JavaFiles implements FileFilter {
	public boolean accept(File f) {
		//if(f.getName().endsWith(".java")) return true;
		//return false;
            return true;
}	}
public class IOTestBytes {
    
    static void write(String fname, double [] d){
        DataOutputStream dos=null;
 try{        
        dos=new DataOutputStream(new BufferedOutputStream(new FileOutputStream(fname)) );
    
        for(double di : d){
        dos.writeDouble(di);
    } 
 }
 catch(IOException ex){}
 finally{
     try{
        if (dos!=null) dos.close();
     } catch(IOException ex){}
 }
    }

    static double[] read(String fname){
        File file=new File(fname);
        
        if (file.exists()){
            ArrayList list = new ArrayList();  
            
            DataInputStream dos =null;
            try{
                dos=new DataInputStream(new BufferedInputStream(new FileInputStream(fname)));
                
                for(;;) list.add(dos.readDouble());
            }
            catch(IOException ex){
                System.out.println(ex.getClass().getSimpleName());
                
            }
            
            finally{
            try{
                if (dos!=null) dos.close();
            }
            catch(IOException ex){}
        }
            
            
            double [] d = new double[list.size()];
            for(int i=0;i<d.length;i++) 
                d[i]=(double)list.get(i);
          return d;  
        }
        else return new double [0];
    }
    public static void main(String[] args) {
        // TODO code application logic here
        //write("data.bin",new double[]{3.1,-1.14,4.5,6,6.67});
        System.out.println(System.getProperty("os.name"));
        double [] d = read("data.bin");
        
        for(double di :d)
            System.out.println(di);
        
        
        File dir = new File("C:\\Users\\student\\Desktop\\Java1\\Лабы Java1\\Lab3");
File[] filelist;
JavaFiles jf = new JavaFiles();
// Now, pass that filter to list().
filelist = dir.listFiles(jf);
// Display the filtered files.
System.out.println("\nJava Source Files:");
for(File f : filelist)
	if(!f.isDirectory()) System.out.println(f.getName());



        
    }
    
}
