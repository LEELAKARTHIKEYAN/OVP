<?php
session_start();
include('connect.php');
$e_id = $_POST['elec_id'];
$_SESSION['electionID']=$e_id;
$result1=mysqli_query($con,"UPDATE `elections` set e_status=1 where e_id=$e_id");
$result2=mysqli_query($con,"SELECT (e_name) from `elections` where e_id=$e_id");
$row = mysqli_fetch_array($result2)[0];

if($result1){
    $getgroups = mysqli_query($con,"select * from `candidate` where e_id=$e_id");
    $groups=mysqli_fetch_all($getgroups,MYSQLI_ASSOC);
    $_SESSION['groups'] = $groups;

    $_SESSION['e_stat']=1;
    $_SESSION['enamedisplay']=$row;
    $_SESSION['result_stats']=0;
    echo '<script>
        alert("Successfully started an election");
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
