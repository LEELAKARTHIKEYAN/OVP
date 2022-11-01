<?php
include('connect.php');
$username=$_POST['name'];
$mobile=$_POST['mobile_number'];
$password=$_POST['password'];
$cpassword=$_POST['cpassword'];
$image=$_FILES['photo']['name'];
$tmp_name=$_FILES['photo']['tmp_name'];
$std=$_POST['std'];

if($cpassword!=$password){
    echo '<script>
    alert("Passwords do not match");
    window.location="../partials/registration.php";
    </script>';
}

else{
    move_uploaded_file($tmp_name,"../uploads/$image");
    $sql="insert into `userdata` (username,mobile,password,photo,standard,status,votes) values('$username','$mobile','$password','$image','$std',0,0)";

    $result=mysqli_query($con,$sql);
    if($result){
        echo '<script>
    alert("Registration Successfull");
    window.location="../";
    </script>';
    }
}
?>