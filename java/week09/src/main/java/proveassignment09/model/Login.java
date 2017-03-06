package proveassignment09.model;

/**
 *
 * @author Keith Higbee
 */
public class Login {
    private String user;
    private String password;
    
    public Login() {
        setUser("");
        setPass("");
    }
    
    public Login(String user, String password) {
        this.setUser(user);
        this.setPass(password);
    }
    
    public String getUser() {
        return user;
    }
    
    public void setUser(String user) {
        this.user = user;
    }
    
    public String getPass() {
        return password;
    }
    
    public void setPass(String password) {
        this.password = password;
    }
    
    public void loadFromFileString(String str) {
        String[] parts = str.split(",");
        
        user = parts[0];
        password = parts[1];
    }
}
