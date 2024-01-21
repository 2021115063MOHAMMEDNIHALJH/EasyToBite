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
  table{
    margin-top:3rem;
    margin-left:24rem;
    height:40rem;
  }
  table,th,td{
          border:0.2rem solid #0047AB;
          border-collapse:collapse;
          width:50rem;
          text-align:center;
          
  }
  th{
    height:2.5rem;
    font-size:1.5rem;
    color:crimson;
  }
  .tot{
    color:crimson;
    font-weight:bold;
  }
  #fixed{
    border-bottom: 0.1rem solid black;   
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
                        <span id="aa"><strong>Your Cart</strong></span><br>
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
          if(isset($_SESSION["email"])){
           $ids=$_SESSION["id"];
           $query="SELECT * FROM CARTS where USERID=$ids";
           $result=$conn->query($query);
           if(!$result){
            die($conn->error);
           }
           $rows=$result->num_rows;
           $total=0;
           echo <<<_END
              <table id="userd1">
              <tr>
                 <th colspan="5">YOUR ORDERS</th>
              </tr>
              <tr>
                 <td>FOOD ID</td>
                 <td>FOOD NAME</td>
                 <td>FOOD CATEGORY</td>
                 <td>FOOD QUANTITY</td>
                 <td>FOOD AMOUNT</td>
              </tr>
           _END;
           for($j=0;$j<$rows;$j++){
            $result->data_seek($j);
            $row=$result->fetch_array(MYSQLI_NUM);
            $total+=$row[4];
            echo <<<_END
                     <tr>
                        <td>$row[1]</td>
                        <td>$row[2]</td>
                        <td>$row[3]</td>
                        <td>$row[5]</td>
                        <td>$row[4]</td>
                     </tr>
            _END;
           }
           echo <<<_END
               <tr>
                   <td colspan="4" class="tot">TOTAL AMOUNT</td>
                   <td class="tot">$total</td>
                </tr>
            </table>
            _END;
          }
          else{
            echo <<<_END
            <div id="userd">
            <table>
            <tr>
               <th id="no">Please Login First</th>
            </tr>
            </table>
            </div>
         _END;
          }
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