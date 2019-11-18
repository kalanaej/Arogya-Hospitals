<?php
//connect to the database

$mysql_host= "localhost";
$mysql_user= "root";
$mysql_pass= "sliit";

$mysql_dp="IWT";

If(!mysql_connect($mysql_host,$mysql_user,$mysql_pass)||!mysql_select_db($mysql_dp)){
    die(mysql_error());
}
else{
    echo"Sucessfully connected with IWT database";
}
?>