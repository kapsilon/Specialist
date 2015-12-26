
package innerclass;
import java.io.IOException;
import java.util.Arrays;
import java.util.Comparator;

enum Day { SUNDAY, MONDAY, TUESDAY, WEDNESDAY, THURSDAY, FRIDAY, SATURDAY }


public class InnerClass {
    static void workWithDay() throws IOException
    {
        Day day=Day.SUNDAY;
        
        if(day==Day.SUNDAY) System.out.println(day);
        
        byte [] buf =new byte[255];
        System.in.read(buf, 0, 255);
        String name= new String(buf);
        Day d2=Day.valueOf(name.trim());
        System.out.println(d2);
    }
    
   
    public static void main(String[] args) throws IOException {
        String [] txt=new String[]{"fortran","cobol","ada","pascal"};
        
        //Arrays.sort(txt);        
        //Arrays.sort(txt, new SortStringDes());
        
        //Анонимный класс
        Arrays.sort(txt,new Comparator<String>() {

            int n=1;
                        
            {System.out.println("block "+n);}
            
            @Override
            public int compare(String s1, String s2) {
                return s1.length()-s2.length();
            }
        });
        
        for(String si: txt)
            System.out.println(si);
        workWithDay();
    }
    
}
