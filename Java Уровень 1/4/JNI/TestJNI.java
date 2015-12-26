public class TestJNI {

    public native int add2(int a, int b);
    public static native int sub2(int a, int b);
    
    static {
        //System.loadLibrary("myMath.dll");
    }
    public static void main(String[] args) {
        int a,b=2,c=3;
        //a=add2(b,c);
        //a=sub2(b,c);
    }
}
