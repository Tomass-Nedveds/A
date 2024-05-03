<!DOCTYPE html> 
<html lang="en"> 
<head> 
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <link rel="stylesheet" href = "./index.css"/> 
    <link rel="stylesheet"href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.min.css"/> 
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> 
    <script src="./index.js"></script> 
</head>
<body> 
    <div class="wrapper"> 
        <h1>Registration form</h1> 
        <form action="" method="post" class="form" id="productForm"> 
        <div class="input__wrap"> 
        <input type="login" id = "login" name="login" placeholder="Login" aria-label="Login" required/> 
        <input type="email" id = "email" name="email" placeholder="Email" aria-label="Email" autocomplete="email" required/> 
        <input type="password" id = "password" name="password" placeholder="Password" aria-label="Password" required/> 
        <button class="secondary" id = "register">Register</button> 
        <button class="contrast" id = "loginbtn">Login</button> 
    </form> 
    </div> 
    </div> 
</body> 
</html>