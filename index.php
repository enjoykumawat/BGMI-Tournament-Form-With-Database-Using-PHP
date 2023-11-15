<?php

include("connection.php");

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="form.css">
    <title>SU E-sports Tournament Registration</title>
</head>

<body>
    <div class="box">
        <span class="borderLine"></span>
        <form method="post" action="" id="registration-form">


            <h2>Register Now</h2>

            <!-- About Team Details -->
            <h3>About Team</h3>
            <div class="inputBox">
                <input id="about-team" name="tname" type="text" required="required">
                <span>Team Name</span>
                <i></i>
            </div>
            <div class="inputBox">
                <input id="igl" name="igl"  type="text" required="required">
                <span>IGL</span>
                <i></i>
            </div>

            <!-- About Player's Details -->

            <h3>About Player's</h3>


            <!-- first player details -->
            <h4>1st Player :</h4>
            <div class="inputBox">
                <input name="p1name" id="p1stname"  type="text" required="required">
                <span>Player Name</span>
                <i></i>
            </div>
            <div class="inputBox">
                <input id="p1gamename" name="p1gamename" type="text" required="required">
                <span>Game Name</span>
                <i></i>
            </div>
            <div class="inputBox">
                <input id="p1plid" name="p1plid" type="text" required="required">
                <span>Player Id</span>
                <i></i>
            </div>
            <div class="inputBox">
                <input id="p1stid" name="p1stid"  type="text" required="required">
                <span>Student Id</span>
                <i></i>
            </div>
            <br>
             <!--Second player details -->
            <h4>2nd Player :</h4>
            <div class="inputBox">
                <input type="text" required="required"  name="p2name" >
                <span>Player Name</span>
                <i></i>
            </div>
            <div class="inputBox">
                <input type="text" required="required" name="p2gamename" >
                <span>Game Name</span>
                <i></i>
            </div>
            <div class="inputBox">
                <input type="text" required="required" name="p2plid" >
                <span>Player Id</span>
                <i></i>
            </div>
            <div class="inputBox">
                <input type="text" required="required" name="p2stid" >
                <span>Student Id</span>
                <i></i>
            </div>
            <br>

             <!--third  player detail -->
            <h4>3rd Player :</h4>
            <div class="inputBox">
                <input type="text" required="required" name="p3name"  >
                <span>Player Name</span>
                <i></i>
            </div>
            <div class="inputBox">
                <input type="text" required="required" name="p3gamename" >
                <span>Game Name</span>
                <i></i>
            </div>
            <div class="inputBox">
                <input type="text" required="required"  name="p3plid" >
                <span>Player Id</span>
                <i></i>
            </div>
            <div class="inputBox">
                <input type="text" required="required" name="p3stid" >
                <span>Student Id</span>
                <i></i>
            </div>
            <br>
             <!--fourth player details -->
            <h4>4th Player :</h4>
            <div class="inputBox">
                <input type="text" required="required" name="p4name" >
                <span>Player Name</span>
                <i></i>
            </div>
            <div class="inputBox">
                <input type="text" required="required" name="p4gamename" >
                <span>Game Name</span>
                <i></i>
            </div>
            <div class="inputBox">
                <input type="text" required="required" name=p4plid >
                <span>Player Id</span>
                <i></i>
            </div>
            <div class="inputBox">
                <input type="text" required="required" name="p4stid" >
                <span>Student Id</span>
                <i></i>
            </div>
            <br>

            <!--<input id="btn" onclick="sendEmail();" name="submit" type="submit" value="Register">-->
            
            <!--<button name="submit" onclick="sendEmail();" id="btn" > Submit  </button>-->
                <input id="btn" type="submit" value="register" name="register">


        </form>
    </div>

</body>





</html>


<?php

if(isset($_POST['register']))


{
    
    $team_name = $_POST['tname'];
    $igl = $_POST['igl'];
    
    $p1name        = $_POST['p1name'];
    $p1gamename    = $_POST['p1gamename'];
    $p1plid        = $_POST['p1plid'];
    $p1stid        = $_POST['p1stid'];
   
   
    $p2name        = $_POST['p2name'];
    $p2gamename    = $_POST['p2gamename'];
    $p2plid        = $_POST['p2plid'];
    $p2stid        = $_POST['p2stid'];
   
   
    $p3name        = $_POST['p3name'];
    $p3gamename    = $_POST['p3gamename'];
    $p3plid        = $_POST['p3plid'];
    $p3stid        = $_POST['p3stid'];
   
   
    $p4name        = $_POST['p4name'];
    $p4gamename    = $_POST['p4gamename'];
    $p4plid        = $_POST['p4plid'];
    $p4stid        = $_POST['p4stid'];
    
    
    
   $query = "INSERT INTO esportdata values('$team_name','$igl','$p1name','$p1gamename','$p1plid','$p1stid','$p2name','$p2gamename','$p2plid','$p2stid','$p3name','$p3gamename','$p3plid','$p3stid','$p4name','$p4gamename','$p4plid','$p4stid')";
   
    $data = mysqli_query($conn,$query);
    
    if($data)
    
    {
        echo "Data Sent Successfully";
    }
    else {
        echo"Failed to Sent Data";
    }
}






?>



