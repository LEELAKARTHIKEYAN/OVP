<?php

session_start();
include('connect.php');
$votes = $_POST['votes'];
$totalvotes = $votes+1;
$cid=$_POST['cid'];
$uid=$_SESSION['id'];

$updatevotes = mysqli_query($con,"update `candidate` set votes='$totalvotes' where cid='$cid'");

$updatestatus = mysqli_query($con,"update `userdata` set status=1 where id='$uid'");

$cgname=mysqli_query($con,"Select cname from `candidate` where cid='$cid'");
$CName=mysqli_fetch_all($cgname,MYSQLI_ASSOC);
$_SESSION['cname']=$CName;

if($updatevotes and $updatestatus){
    $getgroups = mysqli_query($con,"select * from `candidate`");
    $groups=mysqli_fetch_all($getgroups,MYSQLI_ASSOC);
    $_SESSION['groups'] = $groups;
    $_SESSION['status']=1;
    echo '<script> alert("VOTING SUCCESSFUL");
    window.location="../partials/dashboard.php"</script>';
}else{
    echo '<script> alert("Technical error !! Try after sometime");
    window.location = "../partials/dashboard.php"</script>';
}
?>
