<?php

session_start();
$data=$_SESSION['data'];
if($_SESSION['status']==1){
    $status='<b class="text-success">VOTED</b>';
}
else{
    $status='<b class="text-danger">NOT VOTED</b>';
}
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
    <title>OVS-dashboard</title>
</head>
<!-- bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

<link rel="stylesheet" href="../style.css">

<body class="text-light" style="background-color:#4C3575">
    
<!-- navbar -->
<nav class="navbar bg-dark">
<div class="container-fluid my-2">
<!-- <img src="../ovplogoreal.png"> -->
<h1 class="text-center text-warning py-2">Dashboard</h1>
<a href="logout.php"><button class="btn btn-danger text-light px-3">Logout</button></a>
</div>
</nav>
<!-- inside dashboard -->
<div class="row my-4 px-4" style="margin:0px;">
    <div class="col-md-7">
        <?php
        if(isset($_SESSION['groups'])){
            $groups=$_SESSION['groups'];
            for($i=0;$i<count($groups);$i++){
        ?>
                <!-- groups  -->
                    <div class="row" style="background-color:#7858A6;border-radius: 10px;border: 2px solid #73AD21;">
                        <div class="col-md-4">
                            <img src="../uploads/<?php echo $groups[$i]['c_image']?>" width="250px" height="200px" alt="Candidate image">
                        </div>
                        <div class="card col-md-8" style="background-color:#371B58;">
                        <div class="card-body">
                        <strong class="text-warning h6" style="margin:0px">Election ID:</strong>
                            <?php echo $groups[$i]['e_id']?><br>
                        <strong class="text-warning h6" style="margin:0px">Candidate Name : </strong>
                            <?php echo $groups[$i]['cname']?><br>
                            <strong class="text-warning h6" style="margin:0px">Candidate Motto : </strong>
                            <?php echo $groups[$i]['c_motto']?><br>
                            
                        </div>
                        <form action="../actions/voting.php " method="POST">
                        <input type="hidden" name="votes" value="<?php echo $groups[$i]['votes']?>">
                        <input type="hidden" name="cid" value="<?php echo $groups[$i]['cid']?>">

                        <?php
                        if($_SESSION['status'] ==1){
                            ?>
                        <button disabled class="text-white px-4 py-2" style=background-color:#425F57;border-radius:20px;border:0px;margin-bottom:10px;margin-left:200px;">VOTED</button>
                            <?php
                        }
                        else{
                            ?>
                            <button class="text-white px-4 py-2" style=background-color:#E94560;border-radius:20px;border:0px;margin-bottom:10px;margin-left:200px;" type="submit">VOTE</button>
                            <?php
                        }
                        ?>
                        
                    </form>
                        </div>
                    </div>
                    <br><br>
                    <?php
            }
            
        }else{
            ?>
            <div class="container">
                <p>No groups to display</p>
            </div>
            <?php
        }

                    ?>
    
    </div>
    <div class="col-md-5">
        <!-- user profile -->
        <div class="card bg-dark" style="width: 20rem;margin-left:80px;">
            <img src="../uploads/<?php echo $data['photo']?>" class="card-img-top" width="250px" height="300px" alt="User image">
            <div class="card-body">
            <strong class="text-warning h6">Name : </strong>
            <?php echo $data['username']?><br>
            <strong class="text-warning h6">Status : </strong>
            <?php echo $status?><br>
            
            <?php 
            $zcan=$_SESSION['ccname'];
            if(!(empty($zcan)))
            {
                echo '<strong class="text-warning h6">You VOTED FOR : $zcan</strong>';
            }
            else
            {
                echo '<strong class="text-warning h6">You VOTED for : ⨉ </strong>';
            }
            ?>

        
            <br>
        </div>
    </div>
    </div>

</div>


</body>
</html>