<?php
include("dbconnect.php");


if(isset($_GET['update']))
{

    $check = mysqli_query($con, "SELECT * FROM Products");
    $qu = $_GET['quantity'];
    $h = $_GET['hidden'];
    while ($row = mysqli_fetch_array($check)) {
        $updateQuery = mysqli_query($con, "UPDATE Products SET quantity= '$qu' WHERE id='$h'");

    }
    header('Location: ' . $_SERVER['HTTP_REFERER']);

}

if(isset($_GET['remove']))
{
    $check = mysqli_query($con, "SELECT * FROM Products");
    $qu = $_GET['quantity'];
    $h = $_GET['hidden'];
    while ($row = mysqli_fetch_array($check)) {
        $deleteQuery = mysqli_query($con, "DELETE FROM Products WHERE id= '$h'");
    }
    header('Location: ' . $_SERVER['HTTP_REFERER']);
}


?>