<!DOCTYPE HTML>
<html>
<head> 
		<title>Arogya Pharmacy </title>
		<link rel="stylesheet" type="text/css" href="../CSS/add_to_system.css" />
		
</head>
<body>
<header>
		<div>
			<img class="mainicon"src="../Images/logo.jpg">
		</div>
	<div>
	<ul>
		<br/><br/><br/><br/>
		<a href="../index.php"><input type="button" class="btn3" value="Logout"></a>
		<!--<a href="cartnotlogin.php"><img  class="crt" src="cart.jpg"></a>-->
	</ul></div>
	
	<div class="tagline">
	<h1><center>Arogya Pharmacy</center></h1>
	</div>	
			
			<div class="wrd">
			<h5><center>Trust | Convenience | Delivered</center></h5>
			</div>
		
</header>
<div class="rss">
	<a href="https://www.facebook.com/ArogyaPharmecy" target="_blank"><img  class="imgshine" src="../Images/facebook.jpg"></a>
    <a href="https://twitter.com/ArogyaPharmecy" target="_blank" ><img class="imgshine" src="../Images/twitter.jpg"></a>
	<a href="https://instagram.com/unionchemist" target="_blank" ><img class="imgshine" src="../Images/instagram.jpg"></a>
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
	
<div class="form">
    <h2><center>Item Add to System</center></h2>
    
      <span style="padding-right:100px">Catogory : </span>
      <select id="catogory" class="box3" name="catogary">
        <option value="Panadol">Panadol</option>
        <option value="Piriton">Piriton</option>
        <option value="Vitamin C">Vitamin C</option>
		<option value="Asamodagam">Asamodagam</option>
		<option value="Amoxciline">Amoxciline</option>
      </select><br>

	  <td>Item Code : </td>
	  <td><input type="text" class="item_code"></td><br>
	  <td>Item Name : </td>
	  <td><input type="text" class="item_name"></td><br>
	  <td>Quantity : </td>
	  <td><input type="text" class="quantity"></td>
      <select id="quantity" class="box5" name="quantity">
        <option value="kilograms">kilograms</option>
        <option value="grams">grams</option>
      </select><br>
	  
	  <span style="padding-right:100px">Suplier : </span>
      <select id="Suplier" class="box4" name="Suplier">
        <option value="ABC Products">ABC Products</option>
        <option value="XYZ Products">XYZ Products</option>
      </select><br>
	  
	  <td>Buying Price : </td>
	  <td><input type="text" class="buying_price"></td><br>
	  <td>Selling Price : </td>
	  <td><input type="text" class="selling_price"></td><br>
	  <td>Discription : </td>
      <textarea type="text" id="discription"></textarea><br><br><br>
	  
	  <input type="submit" class="btn5" value=" Submit ">

	</div>

<div>
	
	
	<input type="text" class="txt1">
	<input type="submit" class="btn4" value="Search">
	
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

<script type="text/javascript" src="../JS/index1.js"></script>
</body>
</html>