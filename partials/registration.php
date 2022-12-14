<!DOCTYPE html>
<html lang="en">
<head>
<script language="javascript" type="text/javascript">
        window.history.forward();
    </script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register 👈🏽</title>
</head>
<!-- bootstrap -->
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<body class="bg-dark">
    <h1 class="text-center text-warning py-3">Online Voting Portal</h1>
    <div class="py-4" style="background-color:#645CAA">
    <h2 class="text-center text-white py-2" >Register</h2>
    <div class="container text-center">
        <form action="../actions/register.php" method="POST" enctype="multipart/form-data">
            <div class="mb-3">
                <input type="text" class="form-control w-50 m-auto" placeholder="Enter your name" name="username"  required="required" autocomplete="off">
            </div>
            <div class="mb-3">
                <input type="email" class="form-control w-50 m-auto"  placeholder="Enter your mail ID" name="useremail" required="required" autocomplete="off">
            </div>
            <div class="mb-3">
                <input type="password" class="form-control w-50 m-auto" placeholder="Enter your password" name="password" required="required" autocomplete="off">
            </div>
            <div class="mb-3">
                <input type="password" class="form-control w-50 m-auto" placeholder="Confirm your password" name="cpassword" required="required" autocomplete="off">
            </div>
            <!-- <div class="mb-3">
            <input type="file" class="form-control w-50 m-auto" name="voterimage"  accept="image/*">
            </div> -->
            <div class="mb-3 fileUpload btn btn-light">
            <label class="upload">
            <input name='voterimage' type="file" accept="image/*" required="required"/>
                Upload Your Image
                 </label>
             </div>
             <br>
            <button type="submit" class="btn btn-dark my-4">Register</button>
            <p style="color:white;" >Already have an account ?
            <a href="../partials/login.php" class="text-white">Login here</a>
            </p>
        </form>
        <button class="btn btn-warning" onclick="window.location.href='../home/index.php'">Back to Home</button>
    </div>
    </div>
</body>
</html>