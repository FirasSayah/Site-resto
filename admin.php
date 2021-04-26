<?php include("menu.php");
include("connexion.php");
session_start();
?>
<div class="wrraper">
<h3 class="text-aligne">Admin Page</h3>

<?php 
if(isset($_SESSION['add'])){
    echo $_SESSION['add'];
    unset($_SESSION['add']);
}
if(isset($_SESSION['delete'])){
    echo $_SESSION['delete'];
    unset($_SESSION['delete']);
}
if(isset($_SESSION['up'])){
    echo $_SESSION['up'];
    unset($_SESSION['up']);
}
?>
<br><br>
<a href="add-admin.php" class="btnb">Add Admin </a>
<br><br><br>
<table class="tbl">
<tr>
<th>S.N</th>
<th>Full Name</th>
<th>Username</th>
<th>Active</th>
</tr>
<?php   
$sql="SELECT * FROM tbl_admin";
$res =mysqli_query($conn,$sql);

if($res){

    $count = mysqli_num_rows($res);
    if($count>0){
         while($rows=mysqli_fetch_assoc($res)){

            $id=$rows['id'];
            $full_name=$rows['full_name'];
            $username=$rows['username']; ?>
            <tr>
                <td><?php echo $id ?>.</td>
                <td><?php echo $full_name ?></td>
                <td><?php echo $username ?></td>
                <td>
                     <a href="update.php?id=<?php echo $id; ?>" class="btnc"> Update  </a>
                     <a href="delete.php?id=<?php echo $id; ?>" class="btnd">Delete  </a>

                 </td> 
<?php
}
    }
}
?>
</table>

</div>


<?php include("footer.php");?>