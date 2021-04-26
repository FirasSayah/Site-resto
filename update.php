<?php include("menu.php"); 
include("connexion.php");
session_start();
?>
<div style="background-color:#d2dae2;">
    <div class="wrraper">
        <h3 class="text-center"> Update your account</h3>

<?php  
$id =$_GET['id'];
$sql="SELECT * FROM tbl_admin WHERE id=$id";
$res=mysqli_query($conn,$sql);

?>
 
 <br><br>
        <form action="" method="POST">
            <table class="tbl-3">
             <tr>
                 <td> Full Name : </td>
                 <td>&nbsp&nbsp<input  type="text" name="Full_Name" placeholder="Put your Name"></td>
             </tr>
             
             <tr>
                 <td> Username :</td>
                 <td>&nbsp&nbsp<input  type="text" name="Username" placeholder="Username"></td>
             </tr>
             <tr>
                 <td> Password : </td>
                 <td>&nbsp&nbsp<input  type="Password" name="Password" placeholder="password"></td>
             </tr>
             <tr>
                 <td colospan="2"> 
                     <input type="submit" name="submit" value="Update" class="btnd">
                 </td>
             </tr>
               
               

            </table>


        </form>
  
    </div>
</div>
<?php include("footer.php");?>
<?php 

include("connexion.php");

if(isset($_POST['submit'])){
    
     $Full_Name=$_POST['Full_Name'];
     $username=$_POST['Username'];
     $Password=$_POST['Password'];
     
     $sql="UPDATE tbl_admin SET full_name='$Full_Name',username='$username',Password= '$Password' 
     WHERE id=$id";
     $res=mysqli_query($conn, $sql);

     if($res){
         $_SESSION['up'] ="Update success";
         header("location: admin.php");
     }

      
}
    

        
      





?>