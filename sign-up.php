<?php
  session_start();
?>


<DOCTYPE html>
<html lang="en">
    <head>
        <title>Easy Cooking Bite</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <meta name="author" content="MohammedNihal">
        <meta name="keywords" content="foodordering,food,delicious food,food service,plant based,gluten free,hungry">
        <link rel="stylesheet" href="css/loginstyle.css" type="text/css">
        <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />            
        <style>
            .error{
                color:red;
            }
            body{
            background-image: url("images/log-back.jpg");
           }
        </style>
        <script src="https://kit.fontawesome.com/c4254e24a8.js" crossorigin="anonymous"></script>
        <script type="text/javascript">
        function usererr(){
             var user=document.getElementById("user").value;
             if(user.length>20){
                document.getElementById("usererr").innerHTML="Username Cannot Exceed 20 characters";
                return false;
             }
             if(user.length==0){
                document.getElementById("usererr").innerHTML="username is required";
                return false;
             }
             document.getElementById("usererr").innerHTML='<i class="fas fa-check-circle" style="color:seagreen;"></i>';
             return true;
        }
        function emailerr(){
             var email=document.getElementById("mail").value;
             if(email.length>30){
                document.getElementById("mailerr").innerHTML="Email Cannot Exceed 30 characters";
                return false;
             }
             if(email.length==0){
                document.getElementById("mailerr").innerHTML="Email is required";
                return false;
             }
             if(email.length<14){
                return false;
             }
             document.getElementById("mailerr").innerHTML='<i class="fas fa-check-circle" style="color:seagreen;"></i>';
             return true;
        }
        function pwderr(){
             var pwd=document.getElementById("pwd").value;
             if(pwd.length>15){
                document.getElementById("pwderr").innerHTML="password Cannot Exceed 15 characters";
                return false;
             }
             if(pwd.length==0){
                document.getElementById("pwderr").innerHTML="Password is required";
                return false;
             }
             document.getElementById("pwderr").innerHTML='<i class="fas fa-check-circle" style="color:seagreen;"></i>';
             return true;
        }
        function confirm(){
            var pwd=document.getElementById("pwd").value;
            var cpwd=document.getElementById("cpwd").value;
            if(cpwd.length==0){
                document.getElementById("cpwderr").innerHTML="Confirm Password is required";
                return false;
             }
            if(pwd!=cpwd){
                document.getElementById("cpwderr").innerHTML="Password and Confirm Password did not match";
                return false;
            }
                document.getElementById("cpwderr").innerHTML='<i class="fas fa-check-circle" style="color:seagreen;"></i>';
                return true;
            
        }
    </script>
    </head>
    <body> 
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']?>">
        <div id="container1">
        <img src="images/logo.png" height="140" width="230">
            <div id="content1">
                 <p id="sig">Sign Up</p><br><br>
                 <input type="text" name="user" id="user" placeholder="@EXAMPLEUSER" onkeyup="usererr()"> <span id="usererr" class="error"></span><br><br><br>
                 <input type="email" name="email" id="mail" placeholder="EXAMPLE@GMAIL.COM" onkeyup="emailerr()"> <span id="mailerr" class="error"></span><br><br><br>
                 <input type="password" name="pwd" id="pwd" placeholder="PASSWORD" onkeyup="pwderr()"> <span id="pwderr" class="error"></span><br><br><br>
                 <input type="password" name="cpwd" id="cpwd" placeholder="CONFIRM PASSWORD" onkeyup="confirm()"> <span id="cpwderr" class="error"></span><br><br>
                 <input type="submit" name="sign-up" id="sign-up" value="Sign Up">
                 <p>Already have an account?<a href="login-page.php">Sign In</a></p>
            </div>
        </div>
    </form>
    <?php
    if($_SERVER["REQUEST_METHOD"]=="POST"){
     require_once "connection.php";
     $conn= new mysqli($hn,$un,$pw,$db);
     if($conn->connect_error){
        die($conn->connect_error);
    }
    else{
     $erruser=$erremail=$errpwd=$errcpwd="";
        
         $user=$_POST["user"];
         $email=$_POST["email"];
         $pwd=$_POST["pwd"];
         $cpwd=$_POST["cpwd"];
         if($user==null){
            $erruser="Username cannot be blank";
         }
         else if($email==null){
             $erremail="Email cannot be blank";
         }
         else if($pwd==null){
            $errpwd="Password cannot be blank";
         }
         else if($cpwd==null){
            $errcpwd="Confirm Password cannot be blank";
         }
         else if($pwd!=$cpwd){
            $errequal="Password and Confirm password are not the same";
         }
         else{
            $query="INSERT INTO detail(ID,USERNAME,EMAIL,PASS) VALUES(null,'$user','$email','$pwd')";
            $result=$conn->query($query);
            if(!$result){
                die($conn->error);
            }
         }
        }
    }
     ?>

</body>
</html>