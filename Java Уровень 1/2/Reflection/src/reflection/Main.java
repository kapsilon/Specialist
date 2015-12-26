package reflection;

import java.lang.reflect.*;
import java.util.logging.Level;
import java.util.logging.Logger;

public class Main {

    public static void Info(Class obj) {
        System.out.println();
        System.out.println(obj.getName());
        System.out.println(obj.getSuperclass().getName());

        Method[]ms=obj.getMethods();
        for(Method m : ms)
            System.out.println(m);

    }
    public static void main(String[] args) 
                    throws ClassNotFoundException {
        //args.getClass();
        //Class.forName("String");

        Info(args[0].getClass());
        //Info(Class.forName("java.lang.Double"));
    }
}
