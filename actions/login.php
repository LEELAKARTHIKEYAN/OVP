<?php
include('connect.php');

$useremail=$_POST['useremail_log'];
$password=$_POST['password_log'];


$sql = "Select * from `userdata` where useremail = '$useremail'  and password ='$password'";
$result = mysqli_query($con,$sql);
//if no of rows is greater than 0 then data is present in base
if(mysqli_num_rows($result)>0){
    echo '<script>
    window.location="../partials/dashboard.php";
    </script>';
}
else{
    echo '<script>
    alert("Invalid credentials");
    window.location="../";
    </script>';
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