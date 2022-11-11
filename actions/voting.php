<?php

session_start();
include('connect.php');
$votes = $_POST['votes'];
$totalvotes = $votes+1;
$cid=$_POST['cid'];
$uid=$_SESSION['id'];

$updatevotes = mysqli_query($con,"update `candidate` set votes='$totalvotes' where cid=$cid");

$updatestatus = mysqli_query($con,"update `userdata` set status=1 where id='$uid'");




if($updatevotes and $updatestatus){
    $getgroups = mysqli_query($con,"select * from `candidate`");
    $cgname=mysqli_query($con,"SELECT cname from `candidate` where cid=$cid");
    $row = mysqli_fetch_array($cgname)[0];
    $groups=mysqli_fetch_all($getgroups,MYSQLI_ASSOC);
    $_SESSION['groups'] = $groups;
    $_SESSION['status']=1;
    $_SESSION['candname']=$row;
    echo '<script> alert("VOTING SUCCESSFUL");
    window.location="../partials/dashboard.php"</script>';
    
}else{
    echo '<script> alert("Technical error !! Try after sometime");
    window.location = "../partials/dashboard.php"</script>';
}
?>
