<!DOCTYPE HTML>
<html>
<head>
    <title>Arogya Pharmacy </title>
    <link rel="stylesheet" type="text/css" href="CSS/index.css" />
</head>
<body>
<header>
    <div>
        <img class="mainicon"src="Images/logo.jpg">
    </div>
    <div>
        <ul>
            <a href="PHP/login.php"><input type="button" class="btn2" value="Login"></a><br/><br/><br/><br/>
            <a href="PHP/registerform.php"><input type="button" class="btn3" value="Register"></a>
            <a href="PHP/cartnotlogin.php"><img  class="crt" src="Images/cart.jpg"></a>
        </ul></div>

    <div class="tagline">
        <h1><center>Arogya Pharmacy</center></h1>
    </div>

    <div class="wrd">
        <h5><center>Trust | Convenience | Delivered</center></h5>
    </div>

</header>
<div class="rss">
    <a href="https://www.facebook.com/ArogyaPharmecy" target="_blank"><img  class="imgshine" src="Images/facebook.jpg"></a>
    <a href="https://twitter.com/ArogyaPharmecy" target="_blank" ><img class="imgshine" src="Images/twitter.jpg"></a>
    <a href="https://instagram.com/ArogyaPharmecy" target="_blank" ><img class="imgshine" src="Images/instagram.jpg"></a>
</div>

<div class="tabs">
    <ol>
        <li>
            <div align="center"><a href="index.php" class="shine">
                    Home
                </a></div>
        </li>
        <li>
            <div align="center"><a href="PHP/myprofile.php"  class="shine">
                    My Profile
                </a></div>
        </li>
        <li>
            <div align="center"><a href="PHP/Our%20products.php"  class="shine">
                    Our Products
                </a></div>
        </li>
        <li>
            <div align="center"><a href="PHP/About us.php"  class="shine">
                    About us
                </a></div>
        </li>
        <li>
            <div align="center"><a href="PHP/Contact us.php"  class="shine">
                    Contact us
                </a></div>
        </li>
        <li>
            <div align="center"><a href="PHP/Our Team.php"  class="shine">
                    Our Team
                </a></div>
        </li>
        <li>
            <div align="center"><a href="PHP/FAQ.php"  class="shine">
                    FAQ
                </a></div>
        </li>
        <li>
            <div align="center"><a href="PHP/Feedback.php"  class="shine">
                    Feedback
                </a></div>
        </li>
    </ol>
</div>

<div class="Slider">

    <img class="mySlides" src="Images/1.jpg">
    <img class="mySlides" src="Images/2.jpg">
    <img class="mySlides" src="Images/3.jpg">
    <img class="mySlides" src="Images/4.jpg">
</div>

<div class="pr">
    <h1><b><center>Welcome To Arogya</center></b></h1>
    <h3>Customers are not depending on us.We are the depending on customers.</h3>
    <h3>Our Aim - Our main duty is selling medical products and medical equipments in low prices.</h3>
</div>

<div>

    <form action="PHP/searchBar.php" method="GET">
        <input type="text" name="query" class="txt1" />
        <input type="submit" value="Search" class="btn4"/>
    </form>


    <body onload="getCalendar()">
    <div id="calendar"></div>

</div>

<div class="med">
    <p><h3><center>TOP SELLING</center></h3></p><br/><br/>
    <p><a href="#penadol">1) Panadol</a></p><br/>
    <p><a href="#piriton">2) Piriton</a></p><br/>
    <p><a href="#vitamin c">3) Vitamin C</a></p><br/>
    <p><a href="#asamodagam">4) Asamodagam</a></p><br/>
    <p><a href="#amoxciline">5) Amoxciline</a></p>
</div>

<div class="pr1">
    <h3 class="shop">How to shop with us</h3>
    <a href="PHP/upload.php" target="_blank"><img class="crd" src="Images/upload.jpg"></a>
    <a href="PHP/shoppingcart.php" ><img class="crd" src="Images/search.jpg"></a>
    <a href="PHP/deliver.php" target="_blank" ><img class="crd" src="Images/deliver.jpg"></a>
    <p class="p1">Upload Prescription </p>
    <p class="p2">Add to cart</p>
    <p class="p3"> Delivery</p>
</div>

<div class="udr">
    <h2 class="brch">Branches</h2>
    <p class="add1">
        <b>Colombo Branch</b><br/><br/>
        <b>Address : </b>100/S Mallwatha road,colombo<br/>
        <b>Telephone : </b>011-3356789<br/><br/>
    </p>
    <p class="add2">
        <b>Kandy Branch</b><br/><br/>
        <b>Address : </b>200/a peradeniya road,Kandy<br/>
        <b>Telephone : </b>035-3378783<br/><br/>
    </p>
    <p class="add3">
        <b>Kurunagala Branch</b><br/><br/>
        <b>Address : </b>300/b galgamu road,Kurunagala<br/>
        <b>Telephone : </b>031-3390723<br/><br/>
    </p>
    <p class="add4">
        <b>Galle Branch</b><br/><br/>
        <b>Address : </b>400/c court road,Galle<br/>
        <b>Telephone : </b>030-4590776<br/><br/>
    </p>
</div>

<footer>The website and its content is copyright of Arogya Pharmacy -@ Arogya Pharmacy 2018.All rights reserved.</footer>

<script type="text/javascript" src="JS/index.js"></script>
</body>
</html>