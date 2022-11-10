<?php
session_start();
include('connect.php');
$e_id = $_POST['elecc_id'];
$result1=mysqli_query($con,"UPDATE `elections` set e_status=0 where e_id=$e_id");
if($result1){
    $_SESSION['e_stat']=0;
    echo '<script>
        alert("Successfully ended an election");
        window.location="../admin/mainPage.php";
        </script>';
}
else{
    echo '<script>
    alert("Error try again");
    window.location="../admin/mainPage.php";
    </script>';
}
?>