<?php include("menu.php"); 
session_start();
?>
<div class="ad-admin">
    <div class="wrraper">
        <h3 class="text-center"> Add Admin </h3>
        <?php 
           if(isset($_SESSION['add'])){
          echo $_SESSION['add'];
            unset($_SESSION['add']);
}
?>
 <br><br>
        <form action=""method="post">
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
                     <input type="submit" name="submit" value="Add" class="btnb">
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
     $sql="INSERT INTO tbl_admin (full_name,username,password) VALUES ('$Full_Name','$username','$Password')";
     $res=mysqli_query($conn, $sql);

     if ($res) {
        if( $Full_Name=='' or $username=='' or $Password=='' ){
              $_SESSION['add'] ="Admin not Adding";
              header("location: add-admin.php");

        }
        else{
            $_SESSION['add'] ="Admin Add succsffully";
            header("location: admin.php");

        }
        
       
      }    
}
    

        
      





?>