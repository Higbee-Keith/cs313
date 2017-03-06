package proveassignment09.model;

/**
 *
 * @author Keith Higbee
 */
public class Post {
    private String text;
    private String user;

    public Post() {
        setText("");
        setUser("");
    }
    
    public Post(String text, String user) {
        this.setText(text);
        this.setUser(user);
    }
    
    public String getText() {
        return text;
    }
    
    public void setText(String text) {
        this.text = text;
    }
    
    public String getUser() {
        return user;
    }
    
    public void setUser(String user) {
        this.user = user;
    }
    
    @Override
    public String toString() {
        return text + "<br />" + user;
    }
    
    public String toFileString() {
        return text + "," + user;
    }
    
    public void loadFromFileString(String str) {
        String[] parts = str.split(",");
        
        text = parts[0];
        user = parts[1];
    }
}