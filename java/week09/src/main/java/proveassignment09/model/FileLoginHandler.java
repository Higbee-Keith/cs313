package proveassignment09.model;

import java.io.BufferedReader;
import java.io.BufferedWriter;
import java.io.FileReader;
import java.io.FileWriter;
import java.io.IOException;
import java.util.ArrayList;
import java.util.List;

/**
 *
 * @author Keith Higbee
 */
public class FileLoginHandler implements LoginHandler {
    private String filename;
    
    public FileLoginHandler(String filename) {
        this.filename = filename;
    }
    
    public String getFilename() {
        return filename;
    }
    
    public void setFilename(String filename) {
        this.filename = filename;
    }
    
    @Override
    public List<Login> checkUser() {
        List<Login> list = new ArrayList<Login>();
        
        try {
            BufferedReader reader = new BufferedReader(new FileReader(getFilename()));
            
            String line;
            
            while ((line = reader.readLine()) != null) {
                Login login = new Login();
                login.loadFromFileString(line);
                list.add(login);
            }
        } catch (IOException e) {
            e.printStackTrace();
        }
        
        return list;
    }
}
