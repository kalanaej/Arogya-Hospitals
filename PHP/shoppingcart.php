
    <!DOCTYPE html>
    <html>
    <head>
        <title>Arogya Shopping Cart</title>
        <link rel="stylesheet" type="text/css" href="../CSS/cartStyles.css">
        <link rel="stylesheet" type="text/css" href="../CSS/logcart.css" />


    </head>
    <body>
    <header>
        <div>
            <img class="mainicon"src="../Images/logo.jpg">
        </div>
        <div>

            <ul>
                <input type="button" class="btn2" value="Log out"><br/><br/><br/><br/>

            </ul></div>

        <div class="tagline">
            <h1><center>Arogya Pharmacy</center></h1>
        </div>

        <div class="wrd">
            <h5><center>Trust | Convenience | Delivered</center></h5>
        </div>


    <h2 class="head1">My Shopping Cart</h2>
    <div style="overflow-x:auto" class="cartsize">
        <table style="width:100%" class="table">

            <tr>
                <th>Product ID</th>
                <th>Product Image</th>
                <th>Product Name</th>
                <th>Price(RS.)</th>
                <th>Quantity</th>
                <th><a href="../index.php"><input type="submit" class='button1' name="addNew" value="Continue Shopping"></a></th>
            </tr>
<?php
include('dbconnect.php');
$sql1="SELECT * FROM Products";
$qry = mysqli_query($con, $sql1);
$total = 0;

while($row = mysqli_fetch_array($qry))
{
    echo"<form method='GET' action='cartprocess.php'>";
    $idd = $row['id'];
    $na = $row['name'];
    $img = $row['image'];
    $pri = $row['price'];
    $qua = $row['quantity'];

    echo "<tr>";
    echo "<td>" . "$idd". " </td>";
    echo "<td>" . "<img src='$img'>". " </td>";
    echo "<td>" . "$na". " </td>";
    echo "<td>" . "Rs.$pri". " </td>";
    echo "<td> <input type='number' name='quantity' value='$qua' style='width:20px'> <input type='hidden' name='hidden' value='$idd'> <input type='submit' class='button1' name='update' value='update'> </td>";
    echo "<td>" . "<input type='submit' class='button1' name='remove' value='Delete'>". " </td>";
    echo "</tr>";
    $total = $total + ($qua * $pri);//Calculation of the products that purchase
    echo "</form>";
}

echo "<tr>";

echo "<td colspan = '3' align='right'><h2>Total:</h2></td> ";
echo "<td align='right' colspan='2'> <h2>Rs.$total</h2> </td> ";number_format($total, 2);
echo "<td> <a class='button' href='Final%20bill.php'><h2>Proceed Checkout</h2>  </a> </td>";
echo "</tr>";


echo "</table>";
echo "</div>";
echo "<br>";

?>
<footer>The website and its content is copyright of Arogya Pharmacy -@ Arogya Pharmacy 2018.All rights reserved.</footer>
