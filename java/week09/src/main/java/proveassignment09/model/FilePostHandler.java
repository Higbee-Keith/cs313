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
public class FilePostHandler implements PostHandler {
    private String filename;
    
    public FilePostHandler(String filename) {
        this.filename = filename;
    }
    
    public String getFilename() {
        return filename;
    }
    
    public void setFilename(String filename) {
        this.filename = filename;
    }
    
    public void addPost(Post post) {
        try {
            BufferedWriter writer = new BufferedWriter(new FileWriter(getFilename(), true));
        
            writer.write(post.toFileString() + "\n");
            writer.close();
        } catch (IOException e) {
            e.printStackTrace();
        }
    }
        
    @Override
    public List<Post> getPosts() {
        List<Post> list = new ArrayList<Post>();
        
        try {
            BufferedReader reader = new BufferedReader(new FileReader(getFilename()));
            
            String line;
            
            while ((line = reader.readLine()) != null) {
                Post post = new Post();
                post.loadFromFileString(line);
                list.add(post);
            }
        } catch (IOException e) {
            e.printStackTrace();
        }
        
        return list;
    }
}
