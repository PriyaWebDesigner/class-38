<?php

include 'config.php';

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $query = "DELETE FROM authors WHERE id = $id";
    $deleteData = mysqli_query($connection, $query);

    if($deleteData){
       header('location:index.php');
    
    }
    else{
       echo 'Failed to insert Data';
    }
}




?>