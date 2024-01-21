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
    #ord{
           position:absolute;
           margin-left:22.5rem;
           padding:1rem;
           margin-top:15rem;
      }
      #chez{
        position:absolute;
        margin-left:15rem;
        margin-top:18rem;
      }
      #imag{
        float:right;
        margin-top:3rem;
        margin-right:10rem;
      }
      #side{
        position:relative;
          width:50rem;
          height:40rem;
          float:left;
      }
      #last{
        margin-left:20rem;
      }
      #see{
           text-decoration:none;
           color:black;
           font-size:1.3rem;
           background-color:yellow;
           width:9rem;
           height:1.8rem;
           padding:0.5rem;
           position:absolute;
           margin-left:23.5rem;
           margin-top:22rem;
           text-align:center;
      }
      a#see:hover{
        letter-spacing:0.15rem;
        background-color:#DBA800;
      }
      #p1{
        clear:both;
        text-align:center;
        font-size:2.5rem;
      }
      figure{
        border:0.15rem solid black;
        display:inline-block;
        padding:3rem 4rem 3rem 4rem;
        font-weight:bold;
        font-size:1.3rem;
        text-align:center;
        margin-left:6rem;
      }
      #main figure:hover{
        border-style:dashed;
        border-color:black;
      }
      #p2{
        border:0.2rem solid black;
        width:16rem;
        height:5rem;
        font-size:1rem;
        font-weight:bolder;
        color:red;
        text-align:center;
        margin-left:40rem;
      }
      #p22{
        display:inline-block;
        margin-top:1rem;
      }
      #food1{
        margin-left:5rem;
      }
      #fixed{
    border-bottom: 0.1rem solid black;   
     }
     #imag img{
      height:31.25rem;
      width:31.25rem;
     }
     figure img{
      height:6.25rem;
      width:6.25rem;
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
            <header id="header">
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
    <div id="side">
    <p style="color:grey;font-size:1.6rem;" id="ord">order online</p>
    <p style="font-size:3rem;font-weight:bold;" id="chez">Chezzy Hamburger</p>
    <a href="menu.php" id="see">See Menus</a>
    </div>
    <div id="imag">
        <img src="images/home-img-1.png" alt="pizza image" style=" display:inline;">
    </div>
    <p></p>
    <p id="p1"><u>FOOD CATEGORY</u></p><br>
    <div id="food1">
    <figure  id="cat1"><a href="menu.php">
    <img src="images/cat-1.png" alt="imag1"></a>
    <figcaption>Fast Food</figcaption>
    </figure>
    <figure id="cat2"><a href="menu.php">
    <img src="images/cat-2.png" alt="imag2"></a>
    <figcaption>Main Dishes</figcaption>
    </figure>
    <figure id="cat3"><a href="menu.php">
    <img src="images/cat-3.png" alt="imag3"></a>
    <figcaption>Drinks</figcaption>
    </figure>
    <figure id="cat4"><a href="menu.php">
    <img src="images/cat-4.png" alt="imag4"></a>
    <figcaption>Desserts</figcaption>
    </figure></div>
    <p id="p1"><strong><u>Latest Dishes</u><strong></p><br>
    <p>
    <div id="p2"><span id="p22">DO CHECKOUT OUR MENU PAGE<span></div></p><br><br>
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