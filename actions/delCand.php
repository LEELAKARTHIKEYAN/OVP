<?php
include('connect.php');
$cid=$_POST['cid'];
$up3 = "DELETE FROM `candidate` where cid='$cid' ";
$result=mysqli_query($con,$up3);
if($result){
    echo '<script>
        alert("Candidate deleted successfully");
        window.location="../admin/mainPage.php";
        </script>';
}
?>