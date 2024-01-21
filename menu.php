<?php
   session_start();
   if (!isset($_SESSION['id'])){
    header("Location: login-page.php");
   }
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
   #cook{
    float:left;
    margin-left:5rem;
   }
#sidecook{
    width:45rem;
    height:6rem;
    float:right;
    position:relative;
    top:13rem;
    font-size:1.5rem;
    
}
#sidecook strong{
    display:inline-block;
    position:absolute;
     margin-left:4rem;
     font-size:2rem;
     color:#1B1B1B;
     left:8rem;
}
#sidecook #grey{
   color:grey;
   margin-left:4rem;
}
h1{
    text-align:center;
    font-size:3rem;
}
#steps figure{
    border:0.15rem solid black;
    display:inline-block;
    padding:2rem 2rem 2rem 2rem;
    font-weight:bold;
    font-size:1.4rem;
    text-align:center;
    margin-left:2rem;
    width:15rem;
    height:14rem;
    color:grey;
  }
  #steps strong{
   color:black;
   font-size:1.9rem;
  }
  #steps{
    margin-left:14rem;
    padding-top:3rem;
    padding-bottom:3rem;
  }
  body{
    overflow:auto;
  }
  #p1{
        text-align:center;
        font-size:2.5rem;
      }
      #p2{
        border:0.2rem solid black;
        width:16rem;
        height:3rem;
        font-size:1rem;
        font-weight:bolder;
        color:red;
        text-align:center;
        margin-left:40rem;
      }
      #last{
    margin-left:20rem;
  }
  #item figure{
    border:0.2rem solid black;
    width:20rem;
    height:16rem;
    display:inline-block;
    margin-right:2.5rem;
  }
  #item{
    margin-left:25rem;
    margin-top:3rem;
  }
  #item figure img{
    position:absolute;
    margin-left:4rem;
    margin-bottom:1.9rem;
  }
  input[type="submit"]{
    position:absolute;
    margin-left:10rem;
    margin-top:13rem;
    width:2rem;
    height:2rem;
    background-color:lightgrey;
  }
  input[type="submit"]:hover{
    background-color:grey;
  }
  h2{
    text-align:center;
    padding:2rem;
    font-size:2rem;
    text-decoration:underline;
    margin-right:28rem;
  }
  #fixed{
    border-bottom: 0.1rem solid black;   
     }
     figure img{
      width:12.5rem;
      height:12.5rem;
     }
     footer img{
      width:6.25rem;
      height:6.25rem;
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
                        <span id="aa"><strong>Our Menu</strong></span><br>
                        <span id="aaa"><a href="index.php">home</a></span><span id="aaaa">  / about</span>
                    </div>
                </div>
            </div>
    <?php
         
           require_once 'connection.php';
           $conn= new mysqli($hn,$un,$pw,$db);
           if($conn->connect_error)
           {
              die($conn->connect_error);
          }
            if(isset($_POST["add"])){
              $id1=$_SESSION['id'];
              $id=$_POST["FID1"];
              $query1="SELECT * FROM ITEMS WHERE FID1=$id";
              $result=$conn->query($query1);
              $result->data_seek($id-1);
              $row=$result->fetch_array(MYSQLI_NUM);
              $query2="INSERT INTO CARTS(USERID,FID2,FNAME2,FTYPE2,FAMOUNT2,FNUM) VALUES($id1,$row[0],'$row[1]','$row[2]',$row[3],1)";
              $result1=$conn->query($query2);
            }
              echo <<<_END
              <div id="item">
              <h2>Burgers</h2>
              <figure>
                   <img src="images/burger-1.png" alt="img">
                   <form action="menu.php" method="POST">
                   <input type="hidden" name="add" value="yes">
                   <input type="hidden" name="FID1" value="1">
                   <input type="submit" value="+">
                   </form>
              </figure>
              <figure>
                   <img src="images/burger-2.png" alt="img">
                   <form action="menu.php" method="POST">
                   <input type="hidden" name="add" value="yes">
                   <input type="hidden" name="FID1" value="2">
                   <input type="submit" value="+">
                   </form>
              </figure>
              <h2>pizzas</h2>
              <figure>
                   <img src="images/pizza-1.png" alt="img">
                   <form action="menu.php" method="POST">
                   <input type="hidden" name="add" value="yes">
                   <input type="hidden" name="FID1" value="3">
                   <input type="submit" value="+">
                   </form>
              </figure>
              <figure>
                   <img src="images/pizza-2.png" alt="img">
                   <form action="menu.php" method="POST">
                   <input type="hidden" name="add" value="yes">
                   <input type="hidden" name="FID1" value="4">
                   <input type="submit" value="+">
                   </form>
              </figure>
              <h2>drinks</h2>
              <figure>
              <img src="images/drink-1.png" alt="img">
              <form action="menu.php" method="POST">
                   <input type="hidden" name="add" value="yes">
                   <input type="hidden" name="FID1" value="5">
                   <input type="submit" value="+">
                   </form>
              </figure>
              <figure>
              <img src="images/drink-2.png" alt="img">
              <form action="menu.php" method="POST">
                   <input type="hidden" name="add" value="yes">
                   <input type="hidden" name="FID1" value="6">
                   <input type="submit" value="+">
                   </form>
              </figure>
              <h2>Dishes</h2>
              <figure>
              <img src="images/dish-1.png" alt="img">
              <form action="menu.php" method="POST">
                   <input type="hidden" name="add" value="yes">
                   <input type="hidden" name="FID1" value="7">
                   <input type="submit" value="+">
                   </form>
              </figure>
              <figure>
              <img src="images/dish-2.png" alt="img">
              <form action="menu.php" method="POST">
                   <input type="hidden" name="add" value="yes">
                   <input type="hidden" name="FID1" value="8">
                   <input type="submit" value="+">
                   </form>
              </figure>
              <h2>Desserts</h2>
              <figure>
              <img src="images/dessert-1.png" alt="img">
              <form action="menu.php" method="POST">
                   <input type="hidden" name="add" value="yes">
                   <input type="hidden" name="FID1" value="9">
                   <input type="submit" value="+">
                   </form>
              </figure>
              <figure>
              <img src="images/dessert-2.png" alt="img">
              <form action="menu.php" method="POST">
                   <input type="hidden" name="add" value="yes">
                   <input type="hidden" name="FID1" value="10">
                   <input type="submit" value="+">
                   </form>
              </figure>
              </div>
             _END;
          
     ?>
<br><br>
    <footer id="foot1">
          <figure id="img1">
               <img src="images/email-icon.png" alt="emailicon">
               <figcaption>
               OUR EMAIL<br>
               <a href="mailto:nihalnihal690@gmail.com" >nihalnihal690@gmail.com</a>
              </figcaption>
       </figure>
         
         <figure>
                <img src="images/clock-icon.png" alt="clockicon">
                <figcaption>
                WORKING HOURS
                <br>7:00AM-8:00pm
                </figcaption>
         </figure>
         <figure>
                <img src="images/map-icon.png" alt="mapicon">
                <figcaption>
                 OUR ADDRESS:<br>
                Chennai ,Tamilnadu.
                </figcaption>
       </figure>
       <figure>
         <img src="images/phone-icon.png" alt="phoneicon">
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