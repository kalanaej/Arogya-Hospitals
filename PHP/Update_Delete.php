<!DOCTYPE HTML>
<html>
<head> 
		<title>Arogya Pharmacy </title>
		<link rel="stylesheet" type="text/css" href="../CSS/Update_Delete.css" />
		
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
	<h2>Update and Delete</h2>
    
      <td>Search by Item Code : </td>
	  <input type="text" class="search">
	  <td><input type="submit" class="btn6" value=" Search "></td><br>
	  
	  <td>Item Code : </td>
	  <td><input type="text" class="item_code" ></td><br>
	  <td>Availeble Qty : </td>
	  <td><input type="text" class="availeble_qty"></td><br>
	  
	  <td>Add new Qty : </td>
	  <td><input type="text" class="new_quantity"></td>
      <select id="new_quantity" class="box5" name="new_quantity">
        <option value="kilograms">kilograms</option>
        <option value="grams">grams</option>
      </select><br>
	  
	  <td>Change Suplier : </td>
      <select id="change_suplier" class="box4" name="shange_suplier">
        <option value="ABC Products">ABC Products</option>
        <option value="XYZ Products">XYZ Products</option>
      </select><br>
	  
	  <td>New Buying Price : </td>
	  <td><input type="text" class="new_buying_price"></td><br>
	  <td>New Selling Price : </td>
	  <td><input type="text" class="new_selling_price"></td><br>
	  <td>Edit Discription : </td>
      <textarea type="text" class="des" id="edit_discription"></textarea><br><br><br>
	  
	  <input type="submit" class="btn5" value=" Update ">
	  <input type="submit" class="btn7" value=" Delete ">
	
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