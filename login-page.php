<?php
  session_start();
 if(isset($_SESSION["email"])){
    header("Location: profile.php");
 }
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
             if(email.length<10){
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
    </script>
    </head>
    <body> 
        <form method="POST" action="<?php echo $_SERVER['PHP_SELF']?>">  
        <div id="container">
        <img src="images/logo.png" height="140" width="230">
            <div id="content">
                
                  <p id="sig">Sign In</p><br><br>
                 <input type="email" name="email" id="mail" placeholder="EXAMPLE@GMAIL.COM" onkeyup="emailerr()"> <span id="mailerr" class="error"></span><br><br><br>
                 <input type="password" name="pwd" id="pwd" placeholder="PASSWORD" onkeyup="pwderr()"> <span id="pwderr" class="error"></span>
                 <br><br><br>
                 <input type="submit" name="sign-in" id="sign-in" value="Sign In">
                 <p>Dont have an account?<a href="sign-up.php">Sign Up</a></p>
                 
</div>
        </div>
        
</form>
<br><br><br>
<?php
    if($_SERVER["REQUEST_METHOD"]=="POST"){
     require_once "connection.php";
     $conn= new mysqli($hn,$un,$pw,$db);
     if($conn->connect_error){
        die($conn->connect_error);
    }
    else{
        $erremail=$errpwd="";
        $pwd=$_POST["pwd"];
        $email=$_POST["email"];
         if($email==null){
             $erremail="Email cannot be blank";
         }
         else if($pwd==null){
            $errpwd="Password cannot be blank";
         }
         else{
            $query="SELECT ID,USERNAME,EMAIL,PASS FROM detail where EMAIL='$email' and PASS='$pwd'";

            $result=$conn->query($query);
           
            if(!$result){
                die($conn->error);
            }
            else{
                $row=$result->num_rows;
                
                if($row==1)
                {
                    $result->data_seek(0);
                    $rows=$result->fetch_array(MYSQLI_NUM);
                    $_SESSION["id"]=$rows[0];
                    $_SESSION["user1"]="$rows[1]";
                    $_SESSION['email']="$email";
                    $_SESSION['password']="$pwd";
                    header("Location: profile.php");
                }
                else{
                    $error="Details Not found please sign up or Enter Correct Login Details";
                }
            }
         }
        }
    }
     ?>
</body>
</html>