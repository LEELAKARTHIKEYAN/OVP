<?php
include('connect.php');
$username=$_POST['username'];
$useremail=$_POST['useremail'];
$password=$_POST['password'];
$cpassword=$_POST['cpassword'];
$image=$_FILES['voterimage']['name'];
$tmp_name=$_FILES['voterimage']['tmp_name'];

if($cpassword!=$password){
    echo '<script>
    alert("Passwords do not match");
    window.location="../partials/registration.php";
    </script>';
}

else{
    move_uploaded_file($tmp_name,"../uploads/$image");
    $sql="insert into `userdata` (username,useremail,password,photo,status) values('$username','$useremail','$password','$image',0)";

    $result=mysqli_query($con,$sql);
    if($result){
        echo '<script>
    alert("Registration Successfull");
    window.location="../partials/login.php";
    </script>';
    }
}
?>