<%@ page language="java" contentType="text/html; charset=UTF-8" pageEncoding="UTF-8"%>
<%@ page import="java.util.Date" %>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Prueba JSP en Tomcat</title>
    <style>
        body { font-family: Arial, sans-serif; background-color: #f4f4f9; margin: 40px; }
        .card { background: white; padding: 20px; border-radius: 8px; box-shadow: 0 2px 4px rgba(0,0,0,0.1); max-width: 500px; }
        .success { color: #2e7d32; font-weight: bold; }
    </style>
</head>
<body>

    <div class="card">
        <h2>¡Servidor JSP Funcional!</h2>
        <p class="success">Si puedes ver este mensaje, Tomcat ha procesado correctamente el archivo .jsp.</p>
        <hr>
        <p><strong>Fecha y hora actual del servidor:</strong></p>
        <p><%= new Date() %></p>
        <p><strong>Versión de Java:</strong> <%= System.getProperty("java.version") %></p>
    </div>

</body>
</html>