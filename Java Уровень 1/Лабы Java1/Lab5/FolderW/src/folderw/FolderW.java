

package folderw;

import java.io.*;
import java.util.*;


public class FolderW {
   
   private String  path;
   private Set<String> files;        
   private ArrayList<IFileState> list;
   
   public FolderW(String path){
       this.path=path;
       list = new ArrayList<IFileState>();
       
       files = new HashSet<String>();
       File f =new File(path);
       
       Collections.addAll(files, f.list(new FilenameFilter(){
           public boolean accept(File dir,String name){
               return (new File(dir.getPath()+'\\'+name)).isFile();
           }
       }));
               //System.out.println(files);
       
       
   }
   
   public void inspect(){
       Set<String> newFiles=new HashSet<String>();
       
  File f =new File(path);
       
       Collections.addAll(newFiles, f.list(new FilenameFilter(){
           public boolean accept(File dir,String name){
               return (new File(dir.getPath()+'\\'+name)).isFile();
           }
       }));
       
       newFiles.removeAll(files);
       if (newFiles.size()>0) fireAdd(newFiles.toArray(new String[0]));
       //System.out.println(newFiles);
   }
   
   protected void fireAdd(String [] names){
       for(IFileState f : list) f.add(names);
   }
   
   public void addAdd(IFileState obj){
      list.add(obj);
   }
   
   public void removeAdd(IFileState obj){
      list.remove(obj);
   }
    
    
}
