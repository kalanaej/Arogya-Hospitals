<?php
    $con = mysqli_connect("localhost","root","sliit","IWT");
//check connection
if(mysqli_connect_error())
{
    echo"Failed to connect to MySQL:" .mysqli_connect_error();
}
else
{
    echo"sucess";
}

//mysqli_close($con);

?>