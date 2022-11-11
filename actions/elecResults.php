<?php
session_start();
include('connect.php');
$e_id = $_POST['elecc_id'];
$result_s=$_POST['res_st'];
$result1=mysqli_query($con,"UPDATE `elections` set results='$result_s' where e_id='$e_id'");
if(($result1)and $result_s == 1){
    $_SESSION['result_stats']=1;
    echo '<script>
        alert("Results Published");
        window.location="../admin/mainPage.php";
        </script>';
}
else{
    $_SESSION['result_stats']=0;
    echo '<script>
    alert("Results Disabled");
    window.location="../admin/mainPage.php";
    </script>';
}
?>