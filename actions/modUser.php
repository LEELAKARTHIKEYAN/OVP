<?php
include('connect.php');
$id=$_POST['id'];
$up3 = "DELETE FROM `userdata` where id='$id' ";
$result=mysqli_query($con,$up3);
if($result){
    echo '<script>
        alert("User deleted successfully");
        window.location="../admin/mainPage.php";
        </script>';
}
?>