
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="real.php" method="post">
        <label> User name :</label>
        <input type="text" name="username"> <br><br>
        <label> Password :</label>
        <input type="password" name="password"> <br><br>
        <input type="submit" name="login" value="LOG">
    </form>
    
</body>
</html>

<?php
    if(isset($_POST['login'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        if(empty($username)){
            echo"User name is missing ";
        }elseif(empty($password)){
            echo"Password is missing ";
        }else{
            echo"<br> Hello Mr {$username}";
        }
    }


?>

