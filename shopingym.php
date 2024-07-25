<!DOCTYPE html>
<html>
    <head>
        <style>
                       
        body{
    margin: 0 auto;
            }

nav{
    width: 100%;
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    margin-left: 10px;
}

.nav-session-one{
    display: flex;
    flex-direction: row;
}

.nav-logo{
    margin-top: 10px;
    width:90px;
    height:35px;
}

.nav-list{
    display: flex;
    flex-direction: row;
    list-style-type: none;
    margin-left: -10%;
    font-size: 20px;
    font-weight: 550;
}

.nav-list-item{
    margin-left: 30px;
}

.nav-list-item a:hover{
    color: black;
}

.nav-list-item a{
    text-decoration: none;
    color: rgb(214, 215, 234);
}

.nav-session-two{
    display: flex;
    flex-direction: row;
    margin-top : 10px;
    margin-right: 30px;
}

.nav-shopping-cart{
    /* width: 85%;
    height: 85%; */
    width: 35px;
    height: 35px;
}

.nav-search-option{
    display: flex;
    flex-direction: row;
    height: 30px;
    margin-left: 10px;
}

.nav-search-bar{
    width: 300px;
    height: 30px;
    border-radius: 10px;
}

#nav-search-btn{
    background-color: #FF6C48;
    color: white;
    width: 80px;
    border-radius: 10px;
}

.nav-user{
    display: flex;
    flex-direction: row;
    margin-left: 10px;
}

.nav-user a{
    text-decoration: none;
}

#nav-user-img{
    height: 35px;
}

#nav-account{
    margin-left: 5px;
    margin-top: 8px;
    font-size: 20px;
    font-weight: 550;
}

.nav-user a:hover{
    color: blue;
}

 #nav-account {
    position: relative;
} 
  
#nav-account::before {
     content: "";
    position: absolute;
    top : 16px;
    left: 0;
    width: 0;
    height: 2px;
    background-color: blue;
    transition: width 0.3s ease;
}  
  
#nav-account:hover::before {
    width: 100%;
}

#item-count{
    position: absolute;
    background-color: orange;
    border-radius: 50%;
    padding: 0px 5px;
    right: 2%;
    top:-7px;
}
    




      
            /*
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
                color:rgb(138, 165, 240);
                border:1px solid ;
            } */

            body{
                
                background-size:cover;
                background-position:center;
                background-repeat:no-repeat;
                background-attachment:fixed;
                height: 85vh;
               
            }
            

            .intro{
                position:absolute;
                font-size: 20px;
                top:20%;
                left:50%;
                color:white;
            }
            .intro h2,p{
                display:black;
                width:60%;
            }
            .intro h2{
                text-transform: uppercase;
                letter-spacing: 2px;
                font-size: 30px;
            }

            .row{
                display:flex;
                justify-content:center;
            }

            .card1,.card2,.card3,.card4{
                margin-top: 560px;
                width:20%;
                height:100px;
                display: flex;
                justify-content: center;
                flex-direction:column;
                align-items: center;
                color:black;
                padding:10px;
                
            }

            .logout{
                color:bisque;
                border:2px solid black;
            }

            .paragraph{
            display: flex;
            justify-content: space-between;
             }


            img:hover{
                border:6px solid white;
                
            }

            .new{
                margin-top: 400px;
            }

            .btn{
                padding:.6rem .8rem;
                text-transform: uppercase;
                background: rgb(198, 116, 116);
                color:white;
                font-size: 16px;
                text-decoration:none;
                outline:none;
                border: 2px solid black;
                transition: .3s;
                cursor:pointer;
                border-radius: 10px;
            }

            .btn:hover{
                background: transparent;
                background-color: red;
            }
          

          
           
            
        </style>
        <meta charset="utf-8">
        <meta name="view port" content="width=device-width", initial-scale="1">
        <title>
            Registration
        </title>
    </head>

    <body  background="background.jpg" >
        
        
            
            <header>
                <nav>
                    <nav>
    
                        <div class="nav-session-one">
                            <!-- rocstar logo in hear -->
                            <img class="nav-logo" src="nav-logo.png" alt="logo">   
                              
                            <ul class="nav-list">
                                <li class="nav-list-item"><a href="homefirst.php">Home</a></li>
                                <li class="nav-list-item"><a href="shopingym.php">Shop</a></li>
                                <li class="nav-list-item"><a href="privacypolicy.php">privacypolicy</a></li>
                                <li class="nav-list-item"><a href="isuri\aboutUs.html">About us</a></li>
                                <li class="nav-list-item"><a href="feedbackwith.php">feedback</a></li>
                                <li class="nav-list-item"><a href="faqpage.php">faq</a></li>
                            </ul>
                        </div>
                
                        <div class="nav-session-two">
                            <!-- shoping cart image in hear -->
                            <div style="position: relative;">
                       <a href="sehan\shopingCart.html" >        <img class="nav-shopping-cart" src="shoping-cart.png"  alt="Cart"> </a>
                                <!-- add cart item ount -->
                                <span id="item-count">0</span>
                            </div>
                            
                            <div class="nav-search-option">
                                <input class="nav-search-bar" type="search">
                                <!-- serch button -->
                                <button id="nav-search-btn">Search</button>
                            </div>
                            <div class="nav-user">
                                <img id="nav-user-img" src="nav-user.png" alt="">
                                <a id="nav-account" href="isuri\editeProfile.html">Account</a>
                                <div class="nav-account-sidebar">
                                        
                                </div>
                            </div>
                        </div>
                
                    </nav>
                
             
            <div class="banner" >
               
                <div class="intro">
                    <h2 style ="color:aqua"> OUR PACKAGES & SERVICES</h2>
                  
                    <p >No matter what your fitness level, there is an online gym package that is right for you. 
                        With access to a library of workout videos, meal plans,
                         fitness trackers, personal trainers, and a variety of 
                         supplements and equipment, you can reach your fitness goals and live a healthier life.</p>
                    <button class="btn"><a href="loginwithph.php" >  LogIn </a>  </button>
                    <buuton class="btn"><a href="registerIsset.php" >  SignUp    </a> </button>
                    
                    
                </div>
            </div>

                
            
        </header>

        
            
        
        
            <div class="row">
              
                
               
                <br>
                <br>
                <div class="card1" style="color:rgb(226, 216, 225);background:var(red)">
                <h2 style>  BEGINNNER</h2>
                <a href= "exercisetu.php">   <img src="beginner2.jfif" alt="Image 1"> </a>
                    <p class="paragraph"> START YOUR DREAM CARREER
                    </p>
                    </div>
            
            <div class="card2" style="color:rgb(144, 229, 231);background: var(orange);">
            <h2 style>INTERMEDIATE</h2>
            <a href= "exercisetu.php"> <img src="intermediate.jfif"   alt="Image 2"> </a>
            <p class="paragraph"> 
                CAME LONG WAY... BUT ANOTHER JOURNEY AHEAD
            </p> 
            </div>   
            
            <div class="card3" style="color:rgb(124, 219, 170);background: var(orange);">
            <h2 >PRO</h2>
          <a href= "exercisetu.php">  <img src=   "pro.jfif"    alt="Image 3"> </a>
            <p class="paragraph"> 
              ALMOST THERE,DON'T STOP.
            </p> 
         </div>

         <div class="card4" style="color:rgb(215, 230, 102);background: var(orange);">
            <h2 >SUPPLIMENTS</h2>
            <img src="suppliments.jfif" alt="Image 3">
            <p class="paragraph"> 
              FIND THE BEST NUTRITIONS
            </p> 
         </div>


        </div>
        
    </div>
        

        
    </body>
</html>

