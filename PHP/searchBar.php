<?php
   
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

    $query = $_GET['query']; 
  
        $searchResults = mysqli_query($conn,"SELECT * FROM `products`
            WHERE (`Name` LIKE '%".$query."%') OR (`Supplier` LIKE '%".$query."%')OR (`shortDes` LIKE '%".$query."%')OR (`longDes` LIKE '%".$query."%')");
          $displayResults='';   
        // * means that it selects all fields, you can also write: `id`, `title`, `text`
        // articles is the name of our table
         
        // '%$query%' is what we're looking for, % means anything, for example if $query is Hello
        // it will match "hello", "Hello man", "gogohello", if you want exact match use `title`='$query'
        // or if you want to match just full word so "gogohello" is out use '% $query %' ...OR ... '$query %' ... OR ... '% $query'
         
        if(mysqli_num_rows($searchResults) > 0){ // if one or more rows are returned do following
             
            	while($product = mysqli_fetch_array($searchResults))
        { 
             
             $displayResults .= '<table align="center" width="50%" border="0" cellspacing="3" cellpadding="6">
        <tr>
          <td width="17%" valign="top"><img height="150" width="150" src="data:image/jpeg;base64,'.base64_encode( $product['Image'] ).'"/></td>
        <td width="83%" valign="top">'.'<b>' . $product['Name'] .'</b>'. '<br />
            Rs. ' . $product['Price'] .'<br />per '. $product['per']. '<br /><br />
            Supplier: ' . $product['Supplier'] . '<br />Description :'.$product['shortDes'] .'<br />
             <a href="ProductDes.php?id=' . $product['ProductID'] . '">Read more</a></td>
            
        </tr>
      </table>';
    }
}
            
   else{ // if there is no matching rows do following
            echo "No results";
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
                echo $displayResults;?>
            <br />
        </p>
 
</body>
</html>
