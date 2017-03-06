<%-- 
    Document   : postList
    Created on : Mar 3, 2017, 8:40:23 AM
    Author     : Keith Higbee
--%>

<%@page language="java" contentType="text/html" pageEncoding="UTF-8"%>
<%@page import="java.util.List" %>
<%@taglib uri="http://java.sun.com/jsp/jstl/core" prefix="c" %>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>View Posts</title>
    </head>
    <body>
        <div>
            Posts:<br /><br />
            <c:forEach var="post" items="${posts}">
               ${post}<br />
            </c:forEach>
        </div>
    </body>
</html>
