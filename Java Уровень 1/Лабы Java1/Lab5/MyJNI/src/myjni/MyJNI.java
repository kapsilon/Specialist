

package myjni;

/*C:\Users\student\Desktop\Java1\Лабы Java1\Lab5\MyJNI\build\classes>javah -jni my
jni.Test*/


public class MyJNI {

    static{
System.loadLibrary("Project1");
}

    public static void main(String[] args) {
        Test t =new Test();
        
        //System.out.println(System.getProperty("java.library.path"));
        System.out.println(t.someSolt(7, 100));
    }
    
}
