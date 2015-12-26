

package folderw;


public class Test {
    public static void main(String[] args) throws InterruptedException {
      FolderW fMonitor=new FolderW("C:\\Users\\student\\Desktop\\Java1\\Лабы Java1\\Lab5");  
      
      Client cl1 = new Client();
      //Client cl1 = new Client();
      
      fMonitor.addAdd(cl1);
      //fMonitor.addAdd(cl2);
      
      java.lang.Thread.sleep(10000);
      fMonitor.inspect();
    }
}
