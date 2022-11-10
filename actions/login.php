<?php
session_start();
include('connect.php');

$useremail=$_POST['useremail_log'];
$password=$_POST['password_log'];
// $eid=$_POST['eid_log'];


$sql = "Select id,username,useremail,photo,status from `userdata` where useremail = '$useremail'  and password ='$password'";
$result = mysqli_query($con,$sql);

// $sqlc = "SELECT * from `candidate` where e_id=$eid";
$sqlc = "SELECT * from `candidate`";
$resultc= mysqli_query($con,$sqlc);
//if no of rows is greater than 0 then data is present in base

$mailAdmin = "mainAdmin@ovp.in";  //only one admin address is used in our site -- not stored in DB it is default
$passAdmin = "1lk@pranav#pradhniya0";


 //to check whether admin is logging in
if((strpos($mailAdmin, $useremail) !== false) && ((strpos($passAdmin, $password) !== false))){ //enter admin dash
    echo '<script>
    window.location="../admin/mainPage.php"; 
    </script>';

} 
else{
    if(mysqli_num_rows($result)==1){
        $candidate=mysqli_fetch_all($resultc,MYSQLI_ASSOC);
         $_SESSION['groups']=$candidate;

        $data = mysqli_fetch_array($result);
        $_SESSION['username']=$data['username'];
        $_SESSION['status']=$data['status'];
        $_SESSION['photo']=$data['photo'];
        $_SESSION['id']=$data['id'];
        $_SESSION['data']=$data;

        if($_SESSION['status']==0)
        {
            echo '<script>
        window.location="../partials/dashboard.php";
        </script>';
        }
        else{
            echo '<script>
            alert("You have Already voted");
            window.location="../partials/login.php";
            </script>';
        }
    }
    
    else{
        echo '<script>
        alert("Invalid credentials");
        window.location="../partials/login.php";
        </script>';
    }
}



//to use in dashboard
// $data=mysqli_fetch_array($result);
// $_SESSION['id']=$data['id'];
// $_SESSION['status']=$data['status'];
// $_SESSION['data']=$data;
// echo '<script>
//     window.location="../partials/dashboard.php";
//     </script>';
// }
// else{
//     echo '<script>
//     alert("Invalid credentials");
//     window.location="../";
//     </script>';
// }
?>