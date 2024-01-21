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
        height:3rem;
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
    </style>
</head>
<body>
    <header>
        <ul>
            <li id="fir">Easy to Bite</li>
            <li><a href="#">home</a></li>
            <li><a href="#">about</a></li>
            <li><a href="#">menu</a></li>
            <li><a href="#">orders</a></li>
            <li><a href="#">contact</a></li>
            <li><a href="#" id="last"><i class='fa fa-shopping-cart'></i></a></li>
            <li><a href="#"><i class="fa-solid fa-user"></i></a></li>
        </ul>
    </header>
    <div id="main">
    <div id="side">
    <hr id="line">
    <p style="color:grey;font-size:1.6rem;" id="ord">order online</p>
    <p style="font-size:3rem;font-weight:bold;" id="chez">Chezzy Hamburger</p>
    <a href="#" id="see">See Menus</a>
    </div>
    <div id="imag">
        <img src="images/home-img-1.png" alt="pizza image" height="500" width="500" style=" display:inline;">
    </div>
    <p></p>
    <p id="p1"><u>FOOD CATEGORY</u></p><br>
    <div id="food1">
    <figure  id="cat1"><a href="#">
    <img src="images/cat-1.png" width="100" height="100" alt="imag1"></a>
    <figcaption>Fast Food</figcaption>
    </figure>
    <figure id="cat2">
    <img src="images/cat-2.png" width="100" height="100" alt="imag2">
    <figcaption>Main Dishes</figcaption>
    </figure>
    <figure id="cat3">
    <img src="images/cat-3.png" width="100" height="100" alt="imag3">
    <figcaption>Drinks</figcaption>
    </figure>
    <figure id="cat4">
    <img src="images/cat-4.png" width="100" height="100" alt="imag4">
    <figcaption>Desserts</figcaption>
    </figure></div>
    <p id="p1"><u>Latest Dishes</u></p><br>
    <p>
    <div id="p2"><span id="p22">No Products Added Yet<span></div></p><br><br>
    </div>
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