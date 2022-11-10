<?php
session_start();
include('connect.php');
$eid=$_POST['eid'];
$e_name=$_POST['e_name'];
$_SESSION['enamedisplay'] =$e_name;

$electionupdate ="insert into `elections` (e_id,e_name,no_of_cand,firstPlace,secondPlace,thirdPlace) values($eid,'$e_name',0,'-','-','-')";
$result=mysqli_query($con,$electionupdate);
if($result){
    $result1=mysqli_query($con,"truncate table `candidate`");
    $result2=mysqli_query($con,"UPDATE `userdata` set status=0");
    if($result1){
    echo '<script>
        alert("Caution: Candidates of Previous elections will be deleted.\nElection Created successfully");
        window.location="../admin/mainPage.php";
        </script>';
}
}
?>
