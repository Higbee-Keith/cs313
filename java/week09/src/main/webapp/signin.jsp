<%-- 
    Document   : signin
    Created on : Mar 3, 2017, 1:24:22 PM
    Author     : Jandar
--%>

<%@page contentType="text/html" pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Sign in</title>
    </head>
    <body>
        <form method="post" action="SignIn">
            Username: <input type="text" name="txtUsername" /><br />
            Password: <input type="text" name="txtPassword" /><br />
            <br />
            <input type="submit" value="Submit" />
        </form>
    </body>
</html>
