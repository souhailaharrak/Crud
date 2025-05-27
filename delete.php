<?php 

include('connxion.php');
if(isset($_GET['id'])){
    $id=$_GET['id'];
    $query="DELETE FROM exercice WHERE id=$id";
    if(mysqli_query($connect,$query)){
        header('Location:index .php');
        exit();
    }
}





?>