<?php
// session_start();
$dbemail = "m@m.com";
$dbpassword = "123";


if(isset($_POST['email'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    if($email == $dbemail &&  $password == $dbpassword){
        // $_SESSION['user'] = [$dbemail,$dbpassword];
        setcookie("user_fs10","kamnana",time() + (3600 * 24) * 30 , "/");
        header("location: home.php");
    }else{
        echo "email or password invalid";
    }

}



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="login.php" method="post">
        <input type="text" name="email">
        <input type="text" name="password">
        <input type="submit" value="login">
    </form>
</body>
</html>