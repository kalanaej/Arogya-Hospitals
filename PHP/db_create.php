<?php

$con = mysqli_connect("localhost","root","sliit");

//check  connection
if(mysqli_connect_error())
{
    echo"Failed to connect to MySQL:" .mysqli_connect_error();
}
else{
    echo"connected to the database:"   ;
}

//create database
  $sql = "CREATE DATABASE IWT3";

  if(mysqli_query($con,$sql))
  {
      echo "Database IWT created sucessfully";
  }

  else
  {
      echo"Error creating database:" .mysqli_connect_error($con);
  }

//create table
$sql = "CREATE TABLE MEMBER (fname VARCHAR(15),lname VARCHAR(20) ,email VARCHAR(30), telephone INT(10),address VARCHAR(50),username VARCHAR(10) PRIMARY KEY ,password VARCHAR (10),sqAns VARCHAR (10))";
//Execute the query
if(mysqli_query($con,$sql))
{
    echo "Table member created successfully";
}

else
{
    echo "Error creating table".mysqli_connect_error($con);
}
?>