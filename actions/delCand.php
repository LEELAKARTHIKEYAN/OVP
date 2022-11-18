<?php
include('connect.php');
$cid=$_POST['cid'];
$eid=$_SESSION['el_id'];
$up3 = "DELETE FROM `candidate` where cid='$cid' ";
$up4 = "UPDATE `elections` set no_of_cand = no_of_cand - 1 where e_id=$eid ";
$result=mysqli_query($con,$up3);
$result1=mysqli_query($con,$up4);
if($result and $result1){
    echo '<script>
        alert("Candidate deleted successfully");
        window.location="../admin/mainPage.php";
        </script>';
}
?>