<!DOCTYPE html>
<html>
<head>
    <style>
            nav{
                position:fixed;
                width:100vw;
                height:60px;
                border-top:.5rem solid rgb(131, 48, 48);
                justify-content:space-between;
                align-items: center;

            }
            
            .logo{
                
                display:flex;
                justify-content:center;
                align-items:center;
                height:55px;
                width:15%;
                font-weight:700;
                background:rgb(145, 38, 38);
            }

            .logo::before{
                content:"GYM";
                color:aliceblue;
            }

            .logo::after{
                content:"Today";
                color:rgb(0, 0, 0);

            }

            ul{
                
                display:flex;
                align-items: center;
                height:60px;
                margin-left: 650px;
                
            }

            ul a{
                
                text-decoration: none;
                color:white;
                margin:0 2rem;
                text-transform:uppercase;
                font-weight:700;
                font-size: 20px;
            }

            ul li{
            
                list-style:none;
            }

            ul a:hover{
                color:yellow;
            }

        body{
          background-size:cover;
          background-repeat: no-repeat;
        }
          .image
          {
            height:300px;
            width:100%;
          }

        .text{
            text-align: center;
            font-size: 40px;
            color: greenyellow;
        }

     .container {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      align-items: center;
      height: 50vh;
      position: relative; /* Added */
    }

    .video-container {
      width: 25%; /* Adjust the width of each video container */
      padding: 10px;
      box-sizing: border-box;
    }

    .vertical-line {
      position: absolute;
      top: 0;
      bottom: 0;
      width: 2px; /* Adjust the width of the line */
      background-color: #000; /* Adjust the color of the line */
      margin: auto;
    }

    .icons{
        display:flex;
        justify-content: space-between;   
        width:200px;
        height:200px;
    }

    .image2{
      margin-left:200px;
    }

    .image3{
       margin-left: 500px ;
    }

    </style>
    <title>
        Exercise Tutorials
    </title>
</head>    

<body background="pexels-fwstudio-129731.jpg">

   
  <header>
            
    

  <nav>
    <h2 class="logog"></h2>
    <ul>
        <a href="#"><li>Home</li></a>
        <a href="#"><li>Shop</li></a>
        <a href="#"><li>About Us</li></a>
        <a href="#"><li>Contact</li></a>
        <a href="#"><li>FAQ</li></a>
        <a href="#"><li>Privacy</li></a>
    </ul>
    </nav> 
    

<div class="new">
    <img class="image" src="gymvideos.webp">
</div>

<div class="text">
    <p class="text"><b>EXERCISE TUTORIALS, LET'S BEGIN WORKOUT</b> </p>
</div>


<div class="icons">
    <img  class="image2" src="usericon1.jpg">
    <img  class="image3" src="gymusericon2.jpg">
</div>
<div class="container">
    <div class="video-container">
      <iframe width="60%" height="150" src="https://www.youtube.com/embed/VIDEO_ID1" frameborder="0" allowfullscreen>Beginner</iframe>
    </div>
    
    <div class="video-container">
      <iframe width="60%" height="150" src="https://www.youtube.com/embed/VIDEO_ID2" frameborder="0" allowfullscreen>Intermediate</iframe>
    </div>
   
    <div class="video-container">
      <iframe width="60%" height="150" src="https://www.youtube.com/embed/VIDEO_ID3" frameborder="0" allowfullscreen>Pro</iframe>
    </div>
   
    <div class="video-container">
      <iframe width="60%" height="150" src="https://www.youtube.com/embed/VIDEO_ID4" frameborder="0" allowfullscreen>Yoga</iframe>
    </div>
   
    <div class="vertical-line"></div>
    <div class="video-container">
      <iframe width="60%" height="150" src="https://www.youtube.com/embed/VIDEO_ID5" frameborder="0" allowfullscreen>Beginner</iframe>
    </div>
   
    <div class="video-container">
      <iframe width="60%" height="150" src="https://www.youtube.com/embed/VIDEO_ID6" frameborder="0" allowfullscreen>Intermediate</iframe>
    </div>
    
    <div class="video-container">
      <iframe width="60%" height="150" src="https://www.youtube.com/embed/VIDEO_ID7" frameborder="0" allowfullscreen>Pro</iframe>
    </div>
    
    <div class="video-container">
      <iframe width="60%" height="150" src="https://www.youtube.com/embed/VIDEO_ID8" frameborder="0" allowfullscreen>Yoga</iframe>
    </div>
    
  </div>
</body>
</html>
