<?php
if(isset($_GET['btn']))
{
    $name=$_GET['name'];
    $email=$_GET['email'];

    echo $name;
    echo $email;
}
?>
<html>
    <body>
        <form method="get" action="">
            Enter name : <input type="text" name="name" ><br><br>
            Enter email : <input type="text" name="email"><br><br>
            <input type="submit" name="btn" value="submit">
        </form>
    </body>
</html>