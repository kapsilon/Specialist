package mycounter;

import java.io.*;
import java.util.*;

public class WordCounter {
    private String inFile;
    private String outFile;
    private static String testString = " fhfghgf  hello   o wtryh\n  hello o o ";

    public WordCounter(String inFile, String outFile) {
        this.inFile = inFile;
        this.outFile = outFile;
    }

    private Hashtable words = new Hashtable();
    public  Hashtable getWords() { return words; }
    
    //члены класса для подписки на события
    private Vector<IWordCounter> listererns=new Vector<>();
    public void addListener(IWordCounter obj){listererns.add(obj);}
    public void delListener(IWordCounter obj){listererns.remove(obj);}
    
    //метод для рассылки события "counted"
    protected void fireCounted(int size){
       for(IWordCounter obj : listererns)  obj.counted(this, size);
    }
    
    public void countWords(){ 
        int num=0;
        try {
            Reader reader;
            if ( inFile == null ) 
                    reader = new StringReader(testString);
            else    reader = new FileReader(inFile);

            BufferedReader br=new BufferedReader(reader);
            for (String line = br.readLine(); line != null; line = br.readLine()) {

                StringTokenizer st =new  StringTokenizer(line," \t\n\r\f.,;:\"");  
                while(st.hasMoreTokens()) {
                    String token=st.nextToken();
                        if (!words.containsKey(token)){
                                words.put(token,1);
                                num++;
                        }
                        else {
                            Object val = words.get(token);
                            int n=(int) val;
                            n++;
                            words.put(token,n);
                        }
                }
            }
            br.close(); 
            System.out.println("num="+num);
            
            //рассылка события всем подписчикам
            fireCounted(num);
        }
        catch (IOException ex) { ex.printStackTrace(); }
    }
}
