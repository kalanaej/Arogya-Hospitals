<!DOCTYPE HTML>
<html>
<head>
    <title>Arogya Pharmacy </title>
    <link rel="stylesheet" type="text/css" href="../CSS/Card.css"/>
    <script type="text/javascript" src="../JS/card.js"></script>
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
    <a href="https://www.facebook.com/ArogyaPharmecy" target="_blank" ><img  class="imgshine" src="../Images/facebook.jpg"></a>
    <a href="https://twitter.com/ArogyaPharmecy" target="_blank" ><img  class="imgshine" src="../Images/twitter.jpg"></a>
    <a href="https://instagram.com/ArogyaPharmecy" target="_blank" ><img  class="imgshine" src="../Images/instagram.jpg"></a>

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

<form name="card" onsubmit="return cardValidate()" >
    <form method="post" action = "validate.php">
    <div class="payment">
        <div class="con">
            <div class="pay">
                <h2><center>Payment</center></h2>
                <label>Credit card number</label>
                <input type="text" id="cardnumber" class="b" placeholder="Enter 16 digits number" name="creditcard">

                <label>Exp Month</label>
                <input type="text" id="expm" class="b" placeholder="January" name="expmonth" >

                <label>Exp Year</label>
                <input type="text" id="expy" class="b" placeholder="2018" name="expyear" >

                <label>CVV</label>
                <input type="text" id="cvv" class="b" placeholder="Enter 3 digit number" name="cvv" >

                <a href="Final%20bill.php"><input type="button" value="Back" class="btnb"></a>
                <a href="reciept.php"><input type="button" value="Proceed" class="btns"></a>
            </div>
        </div>
    </div>
    </form>
</form>





<div>

    <input type="text" class="txt1">
    <input type="button" class="btn4" value="Search">

</div>


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