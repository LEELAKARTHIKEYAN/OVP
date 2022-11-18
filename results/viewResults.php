<?php
session_start();
include("../actions/connect.php");
$eid = $_SESSION['electionID'];
$vot_res=mysqli_query($con,"SELECT * from `candidate` where e_id=$eid order by votes desc");
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

<?php
    $eid = $_SESSION['electionID'];
        if(isset($_SESSION['res_grp'])){
            $groups=$_SESSION['res_grp'];

            if($groups[0]['votes']==$groups[1]['votes'])
            {
                echo "<center><b><h2 style='color:#3B3486;font-size:30px;padding:20px;margin-left:80px;'>" .$groups[0]['partyName']. " and ".$groups[1]['partyName']." in coalition</h2></b></center>";
                echo "<b><h2 style='color:#CD104D;font-size:30px;padding:10px;margin-left:80px;'>" .$groups[0]['cname']. " and ".$groups[1]['cname']." tied in the Election</h2></b>";
                
                
            }
            else
            {
                echo "<b><h2 style='color:#CD104D;font-size:30px;padding:40px;margin-left:80px;'>" .$groups[0]['cname']. " Wins the Election</h2></b>";

            }
            $a=$groups[0]['cname'];
            $b=$groups[1]['cname'];
            $c=$groups[2]['cname'];

                $fp=mysqli_query($con,"UPDATE `elections` set firstPlace='$a' where e_id=$eid");
                $sp=mysqli_query($con,"UPDATE `elections` set secondPlace='$b' where e_id=$eid ");
                $tp=mysqli_query($con,"UPDATE `elections` set thirdPlace='$c' where e_id=$eid");
        }
        ?>
<div class="row my-4 px-4" style="margin:0px;">s
    <div class="col-md-7">
        <?php
        if(isset($_SESSION['res_grp'])){
            $groups=$_SESSION['res_grp'];
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