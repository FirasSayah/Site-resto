<?php include("menu.php"); ?>
<div class="ad-admin">
    <div class="wrraper">
        <h3 class="text-center"> Add Admin </h3>
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


if(isset($_POST['submit'])){
    echo'button are cicket';
}
?>