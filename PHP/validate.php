<?php
    require 'db_connect.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Comments on Library Services</title>
</head>
<body>
<div align="center">
    <h4>
        <?php
        if(isset($_POST["cardNo"]) && isset($_POST["month"]) && isset($_POST["year"]) && isset($_POST["cvv"]))
        {
            $cardNo = $_POST["cardNo"];
            $mnth = $_POST["month"];
            $yer = $_POST["year"];
            $cvv = $_POST["cvv"];
        }
        else
        {
            $error = "One or more fields are not filled";
            echo $error;
        }
        //insert data to the database
        if (isset($_POST["proceed"])){
            $validate = "SELECT cardNo,mnth,yer,cvv FROM card Where cardNo=$cardNo AND mnth=&mnth AND yer=$yer AND cvv=&cvv";

            if(!mysql_query($validate)){
                die('Error : '.mysql_error());
            }
            else{
                echo '<br/>';
                echo 'success';
            }
        }
        ?>
        <hr/>
    </h4>
</div>
</body>
</html>
