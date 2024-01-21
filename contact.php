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
   #side{
    float:left;
    margin-left:10rem;
   }
  body{
    overflow:auto;
  }
  #last{
    margin-left:20rem;
  }
 #form1 input{
    display:block;
    margin-top:1rem;
    border:0.1rem solid black;
    width:30rem;
    height:3.5rem;
    position:relative;
    font-size:1.2rem;
    
    
 }
 h3{
    text-align:center;
    font-size:2rem;
    font-weight:bold;
 }
 form{
    width:35rem;
    float:right;
    position:relative;
    top:2rem;
    margin-right:8rem;
 }
 #formc{
    margin-left:2rem;
    padding-top:1.5rem;
    padding-bottom:2rem;
 }
 fieldset{
    border-width:0.3rem;
 }
 #form1 input[placeholder]{
          text-align:left;
         
 }
 #form1 input[type="submit"]{
    width:15rem;
    height:3rem;
    border:0rem solid yellow;
    margin-left:8rem;
    background-color:#F6BE00;
 }
 #form1 textarea{
    width:30rem;
    margin-top:1.5rem;
    border:0.1rem solid black;
    text-align:left;
    font-size:1.2rem;
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
                        <span id="aa"><strong>Contact Us</strong></span><br>
                        <span id="aaa"><a href="index.php">home</a></span><span id="aaaa">  / about</span>
                    </div>
                </div>
            </div>
            <div id="side">
                <img src="images/contact-img.svg" alt="contact" width="600" height="600">
            </div>
            <div id="form1">
                <form  method="post">
                    <fieldset>
                        <div id="formc">
                        <h3>Tell Us Something!</h3>
                        <input type="text" name="name" maxlength="50" class="box" placeholder="enter your name" required>
                        <input type="number" name="number" min="0" max="9999999999" class="box" placeholder="enter your number" required maxlength="10">
                        <input type="email" name="email" maxlength="50" class="box" placeholder="enter your email" required>
                        <textarea name="msg" class="box" required placeholder="enter your message" maxlength="500" cols="30" rows="10"></textarea>
                        <input type="submit" value="send message" name="send" class="btn">
                         </div>
                   </fieldset>
               </form>
            </div>
        <div style="clear:both;"></div><br><br><br>
    <footer id="foot1">
          <figure id="img1">
               <img src="images/email-icon.png" alt="emailicon"><br>
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