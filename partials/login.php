< <?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <script language="javascript" type="text/javascript">
        window.history.forward();
    </script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OVS</title>

    <!-- bootstrap -->
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body class="bg-black">
    <h1 class="text-warning text-center p-3">Online Voting Portal</h1>
    <div class="py-4" style="background-color:#241433">
    <h2 class="text-center py-2 text-white">Login</h2>
    <div class="container text-center">
        <form action="../actions/login.php" method="POST">
            <div class="mb-2">
                <input type="email" class="form-control w-50 m-auto" name="useremail_log" placeholder="Enter your mail ID" required="required" autocomplete="off"> 
            </div>
            <div class="mb-2">
                <input type="password" class="form-control w-50 m-auto" name="password_log" placeholder="Enter your password" required="required" autocomplete="off"> 
            </div>
            <!-- <div class="mb-2">
                <input type="number" class="form-control w-50 m-auto" name="eid_log" placeholder="Enter election ID " required="required" autocomplete="off"> 
            </div> -->
            <button type="submit" class="btn btn-secondary my-4">Login</button>
            <p style="color:white;">Don't have an account ?
            <a href="../partials/registration.php" class="text-white">Register here</a>
            </p>
        </form>
        <button class="btn btn-warning" onclick="window.location.href='../home/index.php'">Back to Home</button>
    </div>
</body>
</html>
<?php
session_abort();
?>