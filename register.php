<?php


$dsn = 'mysql:host=localhost;dbname=lessonDB';
$username = 'root';
$password = '';

$connection = new PDO($dsn,$username,$password);


function validateMail($email, $connection)
{
    $stmt=$connection->prepare("SELECT * FROM lessonTB WHERE email=:email");
    $stmt->bindValue(":email",$email,PDO::PARAM_STR);
    $stmt->execute();

    $count = $stmt->rowCount();

    return $count > 0;

}

$login = $_POST['login'];
$email = $_POST['email'];
$passwd = $_POST['password'];

$emailValid = validateMail($email,$connection); 


if(!$emailValid)
{
    $stmt = $connection->prepare("INSERT INTO lessonTB(login, email, password)VALUES (?,?,?)");
    $stmt->execute([$login,$email,$passwd]);
    echo "New record created successfully";
}else{
    echo "Email already exists!";
}

?>