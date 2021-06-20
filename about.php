<?php include('nav.php'); ?>

        <style>
*{
    margin: 0;
    padding: 0;
    font-family: sans-serif;
}
#header{
    height: 100vh;
    background-image: url(img/background.png);
    background-position: center;
    background-size: cover;
}
.container{
    margin-right: 100px;
    margin-left: 100px;
}
.logo{
    margin-top: 30px;
    width: 100px;
}
.header-text{
    max-width: 350px;
    margin-top: 140px;
}
.h1{
    font-size: 34px;
}
.square{
    height: 12px;
    width: 12px;
    display: inline-block;
    background: SlateBlue;
    margin:15px 0;
}
.button{
    padding: 18px 40px;
    background: transparent;
    outline:none ;
    border: 2px solid SlateBlue;
    font-weight: bold;
    cursor: pointer;
}
p{
    font-size: 20px;
    line-height: 18px;
    color: Gray
;
}
.header-text button{
    margin-top: 30px;
    margin-bottom: 50px;
}
.line1{
    width: 15px;
    height: 15px;
    background: Gray
;
    display: inline-block;
}
.line2{
    width: 80px;
    height: 1px;
    background: #f67c92;
    display: inline-block;
}
.line3{
    width: 60px;
    height: 1px;
    background: #f67c92;
    display: inline-block;
}
.line{
    line-height: 8px;
}
#sideNav{
    width: 250px;
    height: 100vh;
    position: fixed;
    right: -250px;
    top:0;
    background: #863544;
    z-index: 2;
    transition: .5s;
}
nav ul li{
    list-style: none;
    margin: 50px 20px;
}
nav ul li a{
    text-decoration: none;
    color: #fff;
}
#menuBtn{
    width: 50px;
    position: fixed;
    right: 65px;
    top: 35px;
    z-index: 2;
    cursor: pointer;
}

.logoParent{
    display: flex;
    justify-content: center;
    align-items: center;
    width: 200px;
}

.titlesss{
    margin-bottom: -5px;
    margin-left: 20px;
    font-family: 'Gabriela', serif;
    font-size: 50px;
}

/* FEATURES */

#features{
    padding-top: 50px;
    padding-bottom: 50px;
    margin-top: 100px;
}

.feature-row{
    width: 80%;
    margin: auto;
    display: flex;
    align-items: center;
    justify-content: space-around;
    flex-wrap: wrap;
}
.feature-col{
   display: flex;
   flex-direction: column;
   justify-content: space-between;
   height: 300px;
}
.feature-col img{
    width: 200px;
}

.feature-col>a{
    display: inline-block;
}


@media(max-width:450px){
    .container{
        margin-right: 20px;
        margin-left: 20px;
    }

    #header{
        min-height: 100vh;
        background-image: none;
        /* background-size: 100%;
        background-repeat: no-repeat; */
    }


    .header-text{
        margin-top: 20px;
    }

    #menuBtn{
        right: 20px;
    }

    #features{
        margin-top: -20px;
    }

    .button {
        margin-top: 10px;
        margin-bottom: 10px;
    }
}


@media(max-width:1000px){
    #header{
        background-image: none;
        /* background-size: 100%;
        background-repeat: no-repeat; */
    }

}
            </style>
    </head>
    <body>
        <section id="header">
            <div class="container">
                <div class="logoParent">
                    <div><img src="img/icon2.png" class="logo"></div>
                    <div class="titlesss" >Sparks Bank</div>
                </div>
                <div class="header-text">
                    <h1>Get the access of your account </br>now in the comfort of your home</h1>
                    <span class="square"></span>
                    <p>No more waiting in the long queues ,transfer the money very conveniently with the help of our Sparks Bank System , a digital wallet platform and online payment system developed  to power in-app, online, and in-person contactless  transactions with mobile phones.</p>
                    <a href="Register.php"><button class="button">Register Yourself</button></a>
                    <div class="line">
                        <span class="line1"></span><br><br>
                        <span class="line2"></span><br><br>
                        <span class="line3"></span>
                    </div>
                </div>
            </div>
        </section>

<?php ?>
