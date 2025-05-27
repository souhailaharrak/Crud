<?php

$localhost='localhost';
$username='root';
$passowrd='';
$db='crud1';
$connect=mysqli_connect($localhost,$username,$passowrd,$db);
if($connect){
    echo "conncted";
}else{
    echo "not connected";
}

?>