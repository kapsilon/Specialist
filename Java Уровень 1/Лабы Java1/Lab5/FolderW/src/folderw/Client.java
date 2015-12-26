/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

package folderw;

/**
 *
 * @author student
 */
public class Client implements IFileState {

    @Override
    public void add(String[] names) {
        for(String s : names) System.out.println(s);
    }

    @Override
    public void delete(String[] names) {
        throw new UnsupportedOperationException("Not supported yet."); //To change body of generated methods, choose Tools | Templates.
    }
    
}
