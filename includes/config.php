<?php 
$username="root";
$server="localhost";
$database="snlive";
$password="";

try{
    $conn=mysqli_connect($server,$username,$password,$database);
}
catch(Exception){
    echo "can not connect to server";
}

?>