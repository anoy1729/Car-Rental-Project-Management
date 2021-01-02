
<?php 
// Start session
session_start(); 

// Username and password
$ID = "admin";
$pass = "123456";

if (isset($_POST["user"]) && isset($_POST["passw"])) { 

    if ($_POST["user"] === $ID && $_POST["passw"] === $pass) { 
    
   // $_SESSION["inloggedin"] = true; 

    header("Location: admin.php"); 
    exit; 
    } 
        // Wrong login - message
        else {$wrong = "Bad ID and password, the system could not log you in";
     echo $wrong;
    } 
}
?> 
<html >
    <head>
        <title>Login</title>
    </head>
    <body>
         
        <form  action="login.php" method="post">
            Username:  <input type="text" name="user"  /><br />
            Password:  <input type="password" name="passw"  /><br />
            <input type="submit" name="submit" value="Submit" />
        </form>
    </body>
</html>