<?php 
include("connexion.php");
session_start();
$id = $_GET['id'];
 $sql ="DELETE FROM tbl_admin WHERE id=$id";
 $res=mysqli_query($conn, $sql);
 
if($res==true){
    $_SESSION['delete'] ="Success Deleting";
    header("location: admin.php");
}


?>