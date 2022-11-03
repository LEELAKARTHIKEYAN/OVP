<?php
include('connect.php');
// $cid=$_POST['cid'];
$cname=$_POST['cname'];
$c_age=$_POST['c_age'];
$e_id=$_POST['e_id'];
$partyName=$_POST['partyName'];
$c_motto=$_POST['c_motto'];
$c_image=$_FILES['c_image']['name'];
$tmp_name=$_FILES['c_image']['tmp_name'];


    $sql="insert into `candidate` (cname,c_age,c_motto,c_image,votes,e_id,partyName) values('$cname','$c_age','$c_motto','$c_image',0,'$e_id','$partyName')";

        $result=mysqli_query($con,$sql);
        if($result){
            move_uploaded_file($tmp_name,"../uploads/$c_image");
            echo '<script>
        alert("Candidate added successfully");
        window.location="../admin/mainPage.php";
        </script>';
        }

?>