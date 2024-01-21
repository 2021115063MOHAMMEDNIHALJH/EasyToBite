<?php
   session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>online food ordering website</title>
    <link rel="stylesheet" href="css/headerstyle.css">
    <link rel="stylesheet" href="css/footerstyle.css">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />            
   <style>
    *{
        padding:0rem;
        margin:0rem;
    }
      #black1{
        width:100rem;
        height:12rem;
        background-color:#1B1B1B;
        text-align:center;
        position:relative;
      }
   #aa,#aaa,#aaa{
    color:white;
    display:inline-block;
   }
   #aa{
    font-size:3rem;
   }
   #aaa a{
    text-decoration:none;
    font-size:1.5rem;
    color:#F6BE00;
   }
   #aaaa{
    font-size:1.5rem;
    color:lightgrey;
   }
   #aaa:hover{
    color:white;
    text-decoration:underline;
   }
   #cont{
    position:absolute;
    top:3.5rem;
    left:42rem;
   }
   #fixed{
    border-bottom: 0.1rem solid black;   
     }
     #userd table,th,td{
          border:0.2rem solid #0047AB;
          border-collapse:collapse;
          width:30rem;
          text-align:center;
     }
     #userd table{
        height:20rem;
        margin-top:5rem;
        margin-left:35.5rem;
     }
     #last{
    margin-left:20rem;
  }
  body{
            min-width:1460px;
            min-height:1016px;
            overflow:auto;
           }
    </style>
</head>
<body>
  <div id="fixed">
       <header>
           <ul>
               <li id="fir">Easy to Bite</li>
               <li><a href="index.php">home</a></li>
               <li><a href="about.php">about</a></li>
               <li><a href="menu.php">menu</a></li>
               <li><a href="order.php">orders</a></li>
               <li><a href="contact.php">contact</a></li>
               <li><a href="order.php" id="last"><i class='fa fa-shopping-cart'></i></a></li>
               <li><a href="login-page.php"><i class="fa-solid fa-user"></i></a></li>
           </ul>
       </header>
   </div>
    <div id="main">
                <div id="black1">
                    <div id="cont">
                        <span id="aa"><strong>USER PROFILE</strong></span><br>
                        <span id="aaa"><a href="index.php">home</a></span><span id="aaaa">  / about</span>
                    </div>
                </div>
            </div>
    <?php
          if($_SERVER["REQUEST_METHOD"]=="POST"){
              session_unset();
              session_destroy();
          
          }
          if(isset($_SESSION["user1"])){
           $user=$_SESSION["user1"];
           $id=$_SESSION["id"];
           $email=$_SESSION["email"];
           echo <<<_END
             <div id="userd">
             <table>
             <tr>
                <th colspan="2">USER DETAILS : </th>
             </tr>
             
             <tr>
             <td>USERNAME : </td><td>$user</td>
             </tr>
             <tr>
             <td>USER ID : </td><td>$id</td>
             </tr>
             <tr>
             <td>EMAIL : </td><td>$email</td>
             </tr>
             <tr>
             <td colspan="2"><form action="profile.php" method="POST">
             <input type="submit" name="submit" value="LOG OUT"></td>
             </form>
             </tr>
             </table>
             </div>
          _END;
          }
          else{
            echo <<<_END
            <div id="userd">
            <table>
            <tr>
               <th id="no">NO USER DETAILS FOUND</th>
            </tr>
            </table>
            </div>
         _END;
          }
        
          
          
     ?>
<br><br>
    <footer id="foot1">
          <figure id="img1">
               <img src="images/email-icon.png" alt="emailicon" width="100" height="100">
               <figcaption>
               OUR EMAIL<br>
               <a href="mailto:nihalnihal690@gmail.com" >nihalnihal690@gmail.com</a>
              </figcaption>
       </figure>
         
         <figure>
                <img src="images/clock-icon.png" alt="clockicon" width="100" height="100">
                <figcaption>
                WORKING HOURS
                <br>7:00AM-8:00pm
                </figcaption>
         </figure>
         <figure>
                <img src="images/map-icon.png" alt="mapicon" width="100" height="100" >
                <figcaption>
                 OUR ADDRESS:<br>
                Chennai ,Tamilnadu.
                </figcaption>
       </figure>
       <figure>
         <img src="images/phone-icon.png" alt="phoneicon" width="100" height="100">
         <figcaption>
           OUR PHONE NUMBER:
           <br><span id="ph">+91 8778829220.<span>
           </figcaption>
       </figure>
       <div id="black">
        <span id="infoot">
         &copy;Copyright @ 2022 By <span id="innfoot">Mr.Mohammed Nihal</span> | All Rights Reserved!
         <span>
       </div>
    </footer>
</body>
</html>