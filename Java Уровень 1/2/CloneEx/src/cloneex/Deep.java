package cloneex;

public class Deep implements Cloneable {
    int    num;
    String name;

    Deep(){
        num  = 11;
        name = new String("1234");
    }
    public Object clone(){
        Deep copy=null;
        try {
            copy = (Deep) super.clone();
            name = new String(name);
        } catch (CloneNotSupportedException ex) {
            ex.printStackTrace();
        }
        return copy;
    }
}
