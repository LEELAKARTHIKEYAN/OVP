<?php
session_start();
$data=$_SESSION['data'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Results</title>
</head>
<body>
	<!-- inside dashboard -->
<div class="row my-4 px-4" style="margin:0px;">
    <div class="col-md-7">
        <?php
        if(isset($_SESSION['groups'])){
            $groups=$_SESSION['groups'];
            if(count($groups)>0 and (isset($_SESSION['e_stat']))){
            for($i=0;$i<count($groups);$i++){
        ?>
                <!-- groups  -->
                    <div class="row" style="background-color:#7858A6;border-radius: 10px;border: 2px solid #73AD21;">
                        <div class="col-md-4">
                            <img src="../uploads/<?php echo $groups[$i]['c_image']?>" width="250px" height="200px" alt="Candidate image">
                        </div>
                        <div class="card col-md-8" style="background-color:#371B58;">
                        <div class="card-body">
                        
                        <strong class="text-warning h6" style="margin:0px">Candidate Name : </strong>
                            <?php echo $groups[$i]['cname']?><br>
                            <strong class="text-warning h6" style="margin:0px">Age: </strong>
                            <?php echo $groups[$i]['c_age']?><br>
							<strong class="text-warning h6" style="margin:0px">Party: </strong>
                            <?php echo $groups[$i]['partyName']?><br>
                            <strong class="text-warning h6" style="margin:0px">Party Motto : </strong>
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
        }
        else
        {
            ?>
             
            <center><h1 style="color:#E0144C;"><p>NO LIVE ELECTIONS</p></h1></center>
            
               <?php
        }
    }
        

        ?>
    
    </div>
    <center>
    <button class="btn btn-warning pd-3" onclick="window.location.href='../admin/mainPage.php'">Back to Dashboard</button>
    </center>
</body>
</html>