package mycounter;

import java.util.Enumeration;

public class MyCounter {

    public static void main(String[] args) {
        SimpleParser sp=new SimpleParser();  
        sp.Parse(args);
        
        //WordCounter wc=new WordCounter(null,null);
        WordCounter wc=new WordCounter(sp.getInFile(), null);
        
        //подписка на событие
        wc.addListener(new IWordCounter() {
            public void counted(Object sender, int size) {
                System.out.println("client get result="+size);
            }
        });
        
        wc.countWords();
        
//        Enumeration keys = wc.getWords().keys();
//        while(keys.hasMoreElements()){
//           String w=keys.nextElement().toString(); 
//           int n= (int)wc.getWords().get(w);
//           System.out.println(w+"   "+n);
//        }             
    }
}
