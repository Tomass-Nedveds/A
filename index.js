$(document).ready(function(){
    
    
    $("#register").on('click', function (event){
        event.preventDefault();
        $.post("./register.php", $("#productForm").serialize(), function(data){
            if(data === "Email already exists!"){
                alert("Email alredy exists");    
            }
            else{
                alert("Account created");
            }
        });
    });



    
        $("#loginbtn").on('click', function (event){
            event.preventDefault();
            $.post("./login.php",$("#productForm").serialize(), function(data){
                if(data === "reg ok"){
                    alert("Login ok");    
            }
            else if(data === "pass not ok"){
                alert("Pass not ok");
            }else{
                alert("User not found");
            }
        });
    });
});