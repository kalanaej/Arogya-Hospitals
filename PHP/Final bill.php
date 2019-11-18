<!DOCTYPE HTML>
<html>
<head>
    <title>Arogya Pharmacy </title>
    <link rel="stylesheet" type="text/css" href="../CSS/Bill.css" />
</head>
<body>
<header>
    <div>
        <img class="mainicon"src="../Images/logo.jpg">
    </div>
    <div>
        <ul>
            <br/><br/><br/><br/>
            <input type="button" class="btn2" value="Logout">
        </ul></div>

    <div class="tagline">
        <h1><center>Arogya Pharmacy</center></h1>
    </div>

    <div class="wrd">
        <h5><center>Trust | Convenience | Delivered</center></h5>
    </div>

</header>
<div class="rss">

    <a href="https://www.facebook.com/ArogyaPharmecy" target="_blank"><img class="imgshine" src="../Images/facebook.jpg"></a>
    <a href="https://twitter.com/ArogyaPharmecy" target="_blank"><img class="imgshine" src="../Images/twitter.jpg"></a>
    <a href="https://instagram.com/ArogyaPharmecy" target="_blank"><img class="imgshine" src="../Images/instagram.jpg"></a>

</div>

<div class="tabs">
    <ol>
        <li>
            <div align="center"><a href="../index.php" class="shine">
                    Home
                </a></div>
        </li>
        <li>
            <div align="center"><a href="My Profile.php"  class="shine">
                    My Profile
                </a></div>
        </li>
        <li>
            <div align="center"><a href="Our Products.php"  class="shine">
                    Our Products
                </a></div>
        </li>
        <li>
            <div align="center"><a href="About us.php"  class="shine">
                    About us
                </a></div>
        </li>
        <li>
            <div align="center"><a href="Contact us.php"  class="shine">
                    Contact us
                </a></div>
        </li>
        <li>
            <div align="center"><a href="Our Team.php"  class="shine">
                    Our Team
                </a></div>
        </li>
        <li>
            <div align="center"><a href="FAQ.php"  class="shine">
                    FAQ
                </a></div>
        </li>
        <li>
            <div align="center"><a href="Feedback.php"  class="shine">
                    Feedback
                </a></div>
        </li>
    </ol>
</div>
<div class="bill">
    <p>Finalize bill details</p>
</div>

<form method="post" action = "addAddress.php">
    <div class="add">
        <div class="as">
            <div class="a">
                <b>Address :</b>
            </div>
            <textarea class="address" placeholder="Enter your address here" name="address"></textarea>
        </div>

        <div class="p">
            <h3 class="pay">Payment methods</h3>
            <a class="c1"><input type="radio" name="payment" value="v"/><img class="visa" src="../Images/visa.jpg"></a>
            <a class="c2"><input type="radio" name="payment" value="m"/><img class="visa" src="../Images/mastercard.jpg"></a>
            <a class="c3"><input type="radio" name="payment" value="c"/><img class="visa" src="../Images/cash.jpg"></a>
        </div>


        <a href="Card%20Details.php"><input type="button" class="btn6" value="proceed" name="proceed" ></a>
        <a href="shoppingcart.php"><input type="button" class="btn5" value="Back" ></a>
    </div>
</form>


<div class="udr">
    <h2 class="brch">Branches</h2>
    <p class="add1">
        <b>Colombo Branch</b><br/><br/>
        <b>Address : </b>100/S mallf colombo<br/>
        <b>Telephone : </b>011-3356789<br/><br/>
    </p>
    <p class="add2">
        <b>Kandy Branch</b><br/><br/>
        <b>Address : </b>200/S mallf Kandy<br/>
        <b>Telephone : </b>035-3378783<br/><br/>
    </p>
    <p class="add3">
        <b>Kurunagala Branch</b><br/><br/>
        <b>Address : </b>300/S mallf Kurunagala<br/>
        <b>Telephone : </b>031-3390723<br/><br/>
    </p>
    <p class="add4">
        <b>Galle Branch</b><br/><br/>
        <b>Address : </b>400/S mallf Galle<br/>
        <b>Telephone : </b>030-4590776<br/><br/>
    </p>
</div>




<footer>The website and its content is copyright of Arogya Pharmacy -@ Arogya Pharmacy 2018.All rights reserved.</footer>
</body>
</html>