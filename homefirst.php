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
        

           /* nav{
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
                top:20%;
                left:50%;
                color:rgb(106, 253, 118);
                font-size: 20px;
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

            .card1,.card2,.card3{
                margin-top: 580px;
                width:33.3%;
                height:120px;
                display: flex;
                justify-content: center;
                flex-direction:column;
                align-items: center;
                border:3px solid black;
                background-color: rgb(215, 78, 78);
                color:black;
                padding:20px;
                font-size: 20px;
                
            }

            .card h2{
                text-transform:uppercase;
            }

            .card2:hover{
                background-color: beige;
                height:130px;
            }
            

            .card1:hover,.card3:hover{
                height:130px;
                background-color: rgb(141, 0, 0);
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

    <body  background="shehani/background.jpg" >
        <header>
            <nav>
                <nav>

                    <div class="nav-session-one">
                        <!-- rocstar logo in hear -->
                        <img class="nav-logo" src=    "nav-logo.png"      alt="logo">   
                        
                        
                        <ul class="nav-list">
                        <li class="nav-list-item"><a href="homefirst.php">Home</a></li>
                                <li class="nav-list-item"><a href="shopingym.php">Shop</a></li>
                                <li class="nav-list-item"><a href="isuri\aboutUs.html">About us</a></li>
                                <li class="nav-list-item"><a href="feedbackwith.php">feedback</a></li>
                        </ul>
                    </div>
            
                    <div class="nav-session-two">
                        <!-- shoping cart image in hear -->
                        <div style="position: relative;">
                            <img class="nav-shopping-cart" src= "shoping-cart.png"  alt="Cart">
                            <!-- add cart item ount -->
                            <span id="item-count">0</span>
                        </div>
                        
                        <div class="nav-search-option">
                            <input class="nav-search-bar" type="search">
                            <!-- serch button -->
                            <button id="nav-search-btn">Search</button>
                        </div>
                        <div class="nav-user">
                            <img id="nav-user-img" src="nav-user.png" alt="user">
                            <a id="nav-account" href="isuri\editeProfile.html">Account</a>
                            <div class="nav-account-sidebar">
                                    
                            </div>
                        </div>
                    </div>
            
                </nav>

          <!----      <h2 class="logog"></h2>
                <ul>
                    <a href="#"><li>Home</li></a>
                    <a href="#"><li>Shop</li></a>
                    <a href="#"><li>About Us</li></a>
                    <a href="#"><li>Contact</li></a>
                    <a href="#"><li>FAQ</li></a>
                    <a href="#"><li>Privacy</li></a>
                </ul>  -->
                </nav>
            <div class="banner" >
                <div class="intro">
                    <h2 style ="color:aqua"> Be Strong Fitness</h2>
                    <p >Strength is more than just being able to lift heavy weights.
                         It's about being able to do the things you want to do in life, 
                         without feeling limited by your body. It's about being 
                         confident in your ability to handle whatever life throws your way.

                    </p>

                        <button class="btn"> <a href="loginwithph.php">    LogIn </a></button>
                        <buuton class="btn"> <a href="registerIsset.php" > SignUp</a></buuton>
                        
                    
                </div>
                
            
        </header>
            <div class="row">
                <div class="card1" style="color:rgb(228, 157, 221);background:var(red)">
                <h2 style>  WORKOUT PACKAGES</h2>
                    <p > DREAMS ARE HERE, NO TIME TO WAIT.
                    </p>
                    </div>
            
            <div class="card2" style="color:rgb(75, 216, 218);background: var(orange);">
            <h2 style>NUTRITIONS</h2>
            <p > 
                BUILD THE MUSCLES WITH PERFECT DIET
            </p> 
            </div>   
            
            <div class="card3" style="color:rgb(197, 230, 213);background: var(orange);">
            <h2 >GYM EQUIPMENTS</h2>
            <p > 
              FIND BEST EQUIPMENTS, TO SUCCESS YOUR DREAM  
            </p> 
         </div>
        </div>
        
    </div>
        

        
    </body>
</html>