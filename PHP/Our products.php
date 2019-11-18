<?php 
// Run a select query to get my letest 6 items
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

$displayProducts = "";
$sql = mysqli_query($conn,"SELECT * FROM `products` ORDER BY `Name` ASC ");

$noOfProducts = mysqli_num_rows($sql); // count the output amount
if ($noOfProducts > 0) {
	while($product = mysqli_fetch_array($sql))
        { 
             $id = $product["ProductID"];
             $Name = $product["Name"];
             $price = $product["Price"];
             $per = $product["per"];
             $supplier =$product["Supplier"] ;
             $shortDes = $product["shortDes"];
             $displayProducts .= '<table align="center" width="50%" border="0" cellspacing="3" cellpadding="6">
        <tr>
          <td width="17%" valign="top"><img height="150" width="150" src="data:image/jpeg;base64,'.base64_encode( $product['Image'] ).'"/></td>
          <td width="83%" valign="top">'.'<b>' . $Name .'</b>'. '<br />
            Rs. ' . $price .'<br />per '. $per. '<br /><br />
            Supplier: ' . $supplier . '<br />Description :'.$shortDes .'<br />
             <a href="ProductDes.php?id=' . $id . '">Read more</a></td>
            
        </tr>
      </table>';
    }
}else {
	$displayProducts = "We have no products under this catagory";
}
$conn->close();
?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" type="text/css" href="../CSS/search.css" />
    </head>
    <body>
        <h2><b> Our Products</b></h2>
        <p>
            <?php 
                echo $displayProducts;
            ?><br />
        </p>
       
    </body>
</html>
