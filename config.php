<?php
$hostname="localhost";
$username="root";
$password="";
$database="fswd";

$conn =mysqli_connect($hostname,$username,$password,$database);
if($conn){
    echo "Connection sucessfull...";
}
else{
    echo "Connection failed..."+mysqli_connect_error();
}