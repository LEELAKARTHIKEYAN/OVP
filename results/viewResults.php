<?php
session_start();
include("../actions/connect.php");
$vot_res=mysqli_query($con,"SELECT * from `candidate` order by votes desc");
$res_grp=mysqli_fetch_all($vot_res,MYSQLI_ASSOC);
$_SESSION['res_grp'] = $res_grp;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<link rel="stylesheet" href="../partials/css/style.css">
    <title>OVP-Results</title>
</head>
<body>
<?php
if(isset($_SESSION['enamedisplay']))
{
    echo "<b><h2 style='color:#497174;font-size:30px;padding:40px;margin-left:280px;'>ELECTION RESULTS: " .$_SESSION['enamedisplay']. "</h2></b>";
}
?>
<div class="row my-4 px-4" style="margin:0px;">
    <div class="col-md-7">
        <?php
        if(isset($_SESSION['res_grp'])){
            $groups=$_SESSION['res_grp'];
            echo "<b><h2 style='color:#CD104D;font-size:30px;padding:40px;margin-left:80px;'>" .$groups[0]['cname']. " Wins the Election</h2></b>";
            for($i=0;$i<count($groups);$i++){
        ?>
                <!-- groups  -->
                    <div class="row" style="background-color:white;border-radius: 10px;">
                   
                        <div class="col-md-4">
                        <center><img src="../uploads/<?php echo $groups[$i]['c_image']?>" width="250px" height="200px" alt="Candidate image"> </center>
                        </div>
                       
                        <div class="card col-md-6" style="background-color:white;">
                        <div class="card-body">
                        
                        <strong class="text-dark h6" style="margin:0px">Candidate Name : </strong>
                            <?php echo $groups[$i]['cname']?><br><br>
                            <strong class="text-dark h6" style="margin:0px">Party Name:</strong>
                            <?php echo $groups[$i]['partyName']?><br><br>
                            <strong class="text-danger h6" style="margin:0px">Votes : </strong>
                            <?php echo $groups[$i]['votes']?><br>
                            
                        </div>
                        </form>
                        </div>
                    </div>
                    <br><br>
                    <?php
            // }
        }
    }
    
    ?>
    </div>
    <center>
    <button class="btn btn-warning pd-3" onclick="window.location.href='../home/index.php'">Back to Dashboard</button>
    </center>
</body>
</html>