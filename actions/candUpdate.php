<?php
include('connect.php');
 $cid=$_POST['cid'];
$cname=$_POST['cname'];
$c_age=$_POST['c_age'];
$e_id=$_POST['e_id'];
$partyName=$_POST['partyName'];
$c_motto=$_POST['c_motto'];
$c_image=$_FILES['c_image']['name'];
$tmp_name=$_FILES['c_image']['tmp_name'];

if(!(empty($c_age)))
{
    $up1 = "UPDATE `candidate` SET c_age='$c_age',cname='$cname' where cid='$cid' ";
    mysqli_query($con,$up1);
}

if(!(empty($e_id)))
{
    $up2 = "UPDATE `candidate` SET e_id='$e_id',cname='$cname' where cid='$cid' ";
    mysqli_query($con,$up2);
}

if((!empty($partyName)))
{
    $up3 = "UPDATE `candidate` SET partyName='$partyName',cname='$cname' where cid='$cid' ";
    mysqli_query($con,$up3);
}

if(!(empty($c_motto)))
{
    $up4 = "UPDATE `candidate` SET c_motto='$c_motto',cname='$cname' where cid='$cid' ";
    mysqli_query($con,$up4);
}

if(!(empty($c_image)))
{
    $up5 = "UPDATE `candidate` SET c_image='$c_image' and cname='$cname' where cid='$cid' ";
    $akom=mysqli_query($con,$up5);
    if($akom){
        move_uploaded_file($tmp_name,"../uploads/$c_image");}
}
echo '<script>
        alert("Candidate updated successfully");
        window.location="../admin/mainPage.php";
        </script>';
        

?>