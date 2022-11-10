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


    // $checkelec="Select e_status from `elections` where e_id=$e_id";
    // $resultcheck=mysqli_query($con,$checkelec);
    // if($resultcheck == 0)
    // {
        $sql="insert into `candidate` (cname,c_age,c_motto,c_image,votes,e_id,partyName) values('$cname','$c_age','$c_motto','$c_image',0,'$e_id','$partyName')";


        $result=mysqli_query($con,$sql); 
        if($result){
            $sql1="UPDATE `elections` set no_of_cand = no_of_cand + 1 where e_id =$e_id";
            $result1=mysqli_query($con,$sql1);
            if($result1){
            move_uploaded_file($tmp_name,"../uploads/$c_image");
            echo '<script>
        alert("Candidate added successfully");
        window.location="../admin/mainPage.php";
        </script>';
        }
    }
    // }
    else{
        echo '<script>
        alert("Cannot add new Candidate for ended elections");
        window.location="../admin/mainPage.php";
        </script>';
    }

   

?>