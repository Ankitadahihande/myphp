<?php
if(isset($_GET[btn])){
    $name=$_GET['name'];
    $name=$_GET['email'];
    $name=$_GET['password'];
    $name=$_GET['confirm password'];

}
?>
<html>
    
    <body>
        <form method="get" action="">
        Enter name : <input type="text" name="name" ><br><br>
            Enter email : <input type="text" name="email"><br><br>
            Enter password : <input type="password" name="email"><br><br>
            Enter confirm password : <input type="password" name="email"><br><br>
            <input type="submit" name="btn" value="submit">
        </form>

    </body>

    



   
</html>