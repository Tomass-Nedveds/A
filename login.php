<?php

$dsn = 'mysql:host=localhost;dbname=lessonDB';
$username = 'root';
$password = '';

$connection = new PDO($dsn,$username,$password);

function findMail($login,$email,$passwd,$connection)
{
    $stmt=$connection->prepare("SELECT * FROM lessonTB WHERE email=:email");
    $stmt->bindValue(":email",$email,PDO::PARAM_STR);
    $stmt->execute();

    $user=$stmt->fetch(PDO::FETCH_ASSOC);

    if($user){
        if($user['password'] == $passwd){
            echo "reg ok";
        }else{
            echo "pass not ok";
        }
    }else{
        echo "user not found";
    }
}

$login = $_POST['login'];
$email = $_POST['email'];
$passwd = $_POST['password'];


findMail($login,$email,$passwd,$connection);
?>