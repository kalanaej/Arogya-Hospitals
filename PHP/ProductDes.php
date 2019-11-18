
<?php 
if (isset($_GET['id'])) {
	// Connect to the MySQL database  
   $servername = "localhost";
$username = "root";
$password = "sliit";
$dbname ="IWT";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";
	$id = preg_replace('#[^0-9]#i', '', $_GET['id']); 
	$proDetail = "";
	$sql = mysqli_query($conn,"SELECT * FROM `products` WHERE 1 AND ProductID = '$id' ");
	$noOfProducts = mysqli_num_rows($sql); // count the output amount
    if ($noOfProducts > 0) {
		// get all the product details
		while($product = mysqli_fetch_array($sql)){ 
			 $Name = $product["Name"];
			 $price = $product["Price"];
             $per = $product["per"];
			 $supplier = $product["Supplier"];
			 $shortDes = $product["shortDes"];
			 $longDes = $product["longDes"];
                         
                         $proDetail .= '<table align="center" width="50%" border="0" cellspacing="3" cellpadding="6">
        <tr>
          <td width="17%" valign="top"><img height="300" width="250" src="data:image/jpeg;base64,'.base64_encode( $product['Image'] ).'"/></td>
          <td width="83%" valign="top">'.'<b>' . $Name .'</b>'. '<br />
            Rs. ' . $price .'<br />per '. $per. '<br /><br />
            Supplier: ' . $supplier . '<br /><br />Description :'.$shortDes .$longDes.'<br /><br />
                <a id="form1" name="form1" method="post" action="shoppingcart.php">
        <input type="hidden" name="pid" id="pid" value="<?php echo $id; ?>" />
        <a href="shoppingcart.php" ><input type="submit" name="button" id="button" value="Add to Shopping Cart" /></a>
      </form>
          
            
        </tr>
      </table>';
    }
	}
		 
	} else {
		echo "Item does not exist.";
	    exit();
	}
		


$conn->close();
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="../CSS/search.css" />
</head>
<body>
<p>
            <?php 
                echo $proDetail;
            ?><br />
        </p>
 
</body>
</html>