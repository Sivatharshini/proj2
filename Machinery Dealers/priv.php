<!DOCTYPE html>
<html> 
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title> Login Page </title>
<link rel="icon" href="../clg_project/icon.png">
<style> 
button { 
       background-color: #4CAF50; 
       width: 100%;
        color: orange; 
        padding: 15px; 
        margin: 10px 0px; 
        border: none; 
        cursor: pointer; 
         } 
 input[type=text], input[type=password] { 
        width: 100%; 
        margin: 8px 0;
        padding: 12px 20px; 
        display: inline-block; 
        border: 2px solid green; 
        box-sizing: border-box; 
    }
 button:hover { 
        opacity: 0.7; 
    }    
 .container { 
        padding: 25px; 
        background-color: lightblue;
        margin-left: 30%;
        margin-right: 30%;    
    } 
</style> 
</head>

<body background="bgimg.jpg">
<form action="log.html" method="post">
    <center> <h1> Authentication Required </h1> </center>
        <div class="container"> 
            <label>Username : </label> 
            <input type="text" placeholder="Enter Username" name="username" required>
            <label>Password : </label> 
            <input type="password" placeholder="Enter Password" name="password" required>
            <a href="log.html"><button type="submit">Login</button></a>
        </div>
</form>     
</body>  

</html>