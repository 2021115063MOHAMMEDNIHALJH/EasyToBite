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
  #last{
    margin-left:20rem;
  }
  #fixed{
    border-bottom: 0.1rem solid black;   
     }
     figure img{
      height:6.25rem;
      width:6.25rem;
     }
     img[alt="cook"]{
        height:37.5rem;
        width:37.5rem;
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
                        <span id="aa"><strong>About Us</strong></span><br>
                        <span id="aaa"><a href="index.php">home</a></span><span id="aaaa">  / about</span>
                    </div>
                </div>
            </div>
           <div id="cook">
            <img src="images/about-img.svg" alt="cook">
        </div>
        <div id="sidecook">
            <strong>Why choose Us?</strong><br><br>
            <span id="grey">
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deserunt, neque debitis incidunt qui ipsum sed doloremque a molestiae in veritatis ullam similique sunt aliquam dolores dolore? Quasi atque debitis nobis!
            </span>
           
    </div>
    <div style="clear:both;"></div>
    <h1><u>SIMPLE STEPS</u></h1>
    <div id="steps">
        <figure>
        <img src="images/step-1.png" alt="steps">
            <figcaption><strong>Choose Order</strong><br>
Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nesciunt, dolorem.</figcaption>
        </figure>
        <figure>
        <img src="images/step-2.png" alt="steps">
            <figcaption><strong>Fast Delivery</strong><br>
Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nesciunt, dolorem.</figcaption>
        </figure>
        <figure>
        <img src="images/step-3.png" alt="steps">
            <figcaption><strong>Fast Delivery</strong><br>
Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nesciunt, dolorem.</figcaption>
        </figure>
    </div>

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