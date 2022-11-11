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


    $sqll="select * from `userdata` where (useremail='$useremail')";

      $res=mysqli_query($con,$sqll);

      if (mysqli_num_rows($res) > 0) {
        
        $row = mysqli_fetch_assoc($res);
        if($useremail==isset($row['useremail']))
        {
            echo '<script>
            alert("Email already exists.\n Please try another email");
            window.location="../partials/registration.php";
            </script>';
        }
		}
else{

    $sql="insert into `userdata` (username,useremail,password,photo,status,votedFor) values('$username','$useremail','$password','$image',0,'')";

        $result=mysqli_query($con,$sql);
        if($result){
            move_uploaded_file($tmp_name,"../uploads/$image");
            echo '<script>
        alert("Registration Successfull");
        window.location="../partials/login.php";
        </script>';
        }
}

}
?>