<?php
include '../connect_SPL/connect_SPL.php';
if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];

    $sql="delete from `tbl_class` where ID=$id";
    $result=mysqli_query($con,$sql);
    if($result){
        header('location:class.php');
    }
}

?>