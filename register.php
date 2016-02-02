<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset="UTF-8" />
    <title>
        XGI | Gamer registration
    </title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="shortcut icon" href="../uploads/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" type="text/css" href="style.css" />
    <link type="text/css" rel="stylesheet" href="fb-traffic-pop.css">
    <script type="text/javascript" src="jquery.js"></script>
    <script type="text/javascript" src="http://connect.facebook.net/en_US/all.js#xfbml=1"></script>
    <script type="text/javascript" src="fb-traffic-pop.min.js"></script>
    <script type="text/javascript">

	// $(document).ready(function(){
	//
	// 	$().facebookTrafficPop({
	// 		timeout: 30,
	// 		delay: 0,
	// 		title: "Regsitration form",
	// 		message: 'Like us on facebook to Register<center><a href="http://zionram.in"><img src="http://zionram.in/images/logo.png" border="0" style="margin:10px 0px;" /></a></center>',
	// 		url: "https://www.facebook.com/Zionram.in",
	// 		closeable: true,
  //                       share_button : false
	// 	});
	//
	// });

</script>
<style>
@font-face {
    font-family: Vibrocen;
    src: url(css/fonts/vibrocen.ttf);
}
div {
    font-family: Vibrocen;
}
.container {
  margin-right: auto;
  margin-left: auto;
  padding-left: 15px;
  padding-right: 15px;
}
@media (min-width: 768px) {
  .container {
    width: 750px;
  }
}
@media (min-width: 992px) {
  .container {
    width: 970px;
  }
}
@media (min-width: 1200px) {
  .container {
    width: 1170px;
  }
}
.container-fluid {
  margin-right: auto;
  margin-left: auto;
  padding-left: 15px;
  padding-right: 15px;
}

            .alert {
                padding: 8px 35px 8px 14px;
                margin-bottom: 20px;
                text-shadow: 0 1px 0 rgba(255, 255, 255, 0.5);
                background-color: #fcf8e3;
                border: 1px solid #fbeed5;
                border-radius: 4px;
                color: #c09853;
            }

            .success{
                padding: 8px 35px 8px 14px;
                margin-bottom: 20px;
                text-shadow: 0 1px 0 rgba(255, 255, 255, 0.5);
                background-color: #47b101;
                border: 1px solid #fbeed5;
                border-radius: 4px;
                color: #fff;
            }

            .alert-error {
                background-color: #f2dede;
                border-color: #EF9DA9;
                color: #b94a48;
            }

</style>
</head>
<body>
  <div class="container">
    <div class="row">
<form action="index.php" method="post">
  <h1>GAMER REGISTRATION</h1>
  <div class="inset text-uppercase">
    <div class="row">
      <div class="col-md-4">
        <p>
          <label for="qualifier">Qualifier:</label>
          <select class="text-uppercase" name="qualifier">
            <option>Please Select</option>
            <option value="Mumbai">Mumbai</option>
            <option value="Kolkata">Kolkata</option>
            <option value="Delhi">Delhi</option>
            <option value="Banglore">Bangalore</option>
            <option value="Online Qualifier #1">Online Qualifier #1</option>
            <option value="Online Qualifier #2">Online Qualifier #2</option>
          </select>
        </p>
      </div>
      <div class="col-md-4">
        <p>
          <label for="teamname">Team Name: </label>
          <input type="text" name="teamname" id="teamname" required>
        </p>
      </div>
      <div class="col-md-4">
        <p>
          <label for="teamcity">Team City: </label>
          <input type="text" name="teamcity" id="teamcity" required>
        </p>
      </div>
    </div>
  <!-- <p>
    <label for="email">E-MAIL: </label>
    <input type="email" name="email" id="email" required>
  </p>
  <p>
    <label for="phone">PHONE: </label>
    <input type="tel" name="phone" id="phone" required>
  </p>
  <p>
	<label for="game" class="required">GAME: </label>
		<select id="game" name="game">
              <option value="Counter-Strike GO">Counter-Strike GO</option>
              <option value="DotA 2">DotA 2</option>
        </select>
  </p>
  <p>
    <label for="hearabout">WHERE DID YOU HEAR ABOUT US? </label>
    <input type="text" name="hearabout" id="hearabout" required>
  </p> -->
  <div class="row">
    <div class="col-md-4">
      <p>Player #1 (Captain)</p>
      <hr>
      <p>
        <label for="teamonename">Name: </label>
        <input type="text" name="teamonename" id="teamonename" required>
      </p>
      <p>
        <label for="teamonemobile">Mobile No: </label>
        <input type="text" name="teamonemobile" id="teamonemobile" required>
      </p>
      <p>
        <label for="teamoneemail">Email: </label>
        <input type="text" name="teamoneemail" id="teamoneemail" required>
      </p>
      <p>Player #4</p>
      <hr>
      <p>
        <label for="teamfourname">Name: </label>
        <input type="text" name="teamfourname" id="teamfourname" required>
      </p>
      <p>
        <label for="teamfourmobile">Mobile No: </label>
        <input type="text" name="teamfourmobile" id="teamfourmobile" required>
      </p>
      <p>
        <label for="teamfouremail">Email: </label>
        <input type="text" name="teamfouremail" id="teamfouremail" required>
      </p>
    </div>
    <div class="col-md-4">
      <p>Player #2</p>
      <hr>
      <p>
        <label for="teamtwoname">Name: </label>
        <input type="text" name="teamtwoname" id="teamtwoname" required>
      </p>
      <p>
        <label for="teamtwomobile">Mobile No: </label>
        <input type="text" name="teamtwomobile" id="teamtwomobile" required>
      </p>
      <p>
        <label for="teamtwoemail">Email: </label>
        <input type="text" name="teamtwoemail" id="teamtwoemail" required>
      </p>
      <p>Player #5</p>
      <hr>
      <p>
        <label for="teamfivename">Name: </label>
        <input type="text" name="teamfivename" id="teamfivename" required>
      </p>
      <p>
        <label for="teamfivemobile">Mobile No: </label>
        <input type="text" name="teamfivemobile" id="teamfivemobile" required>
      </p>
      <p>
        <label for="teamfiveemail">Email: </label>
        <input type="text" name="teamfiveemail" id="teamfiveemail" required>
      </p>
    </div>
    <div class="col-md-4">
      <p>Player #3</p>
      <hr>
      <p>
        <label for="teamthreename">Name: </label>
        <input type="text" name="teamthreename" id="teamthreename" required>
      </p>
      <p>
        <label for="teamthreemobile">Mobile No: </label>
        <input type="text" name="teamthreemobile" id="teamthreemobile" required>
      </p>
      <p>
        <label for="teamthreeemail">Email: </label>
        <input type="text" name="teamthreeemail" id="teamthreeemail" required>
      </p>
      <p>Player #6</p>
      <hr>
      <p>
        <label for="teamsixname">Name: </label>
        <input type="text" name="teamsixname" id="teamsixname" required>
      </p>
      <p>
        <label for="teamsixmobile">Mobile No: </label>
        <input type="text" name="teamsixmobile" id="teamsixmobile" required>
      </p>
      <p>
        <label for="teamsixemail">Email: </label>
        <input type="text" name="teamsixemail" id="teamsixemail" required>
      </p>
    </div>
  </div>
  <div class="row">
    <div class="terms">
      <p>All fields are mandatory to fill.</p>
      <p>Inform administrator in case of any team changes / correction.</p>
      <p>Team changes / Corrections are strictly prohibited, if the team qualifies for the finale.</p>
      <p>By registering your team you agree to abide by the <a href="http://cgeglobal.in/2015/tandc.htm">Terms and Conditions</a></p>
    </div>
  </div>
  </div>
  <p class="p-container">
    <input type="submit" class="btn" name="submit" id="submit" value="Register">
    <input type="reset" class="btn" name="reset" id="reset" value="Reset">
  </p>
</form>
</div>
</div>
<?php
  define('DB_HOST', 'localhost');
  define('DB_NAME', 'cgegloba_clanwarsregistration');
  define('DB_USER','root');
  define('DB_PASSWORD','');

  $con = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error());
  $db = mysql_select_db(DB_NAME, $con) or die("Failed to connect to MySQL: " . mysql_error());

  if (mysqli_connect_errno($con)){
    //echo "Failed to connect to MySQL: " . mysqli_connect_error();
  } else {
    //echo "Successfully connected to your database";
  }

  ini_set('display_errors', 1);

  //$teamid;


  function registration() {

    $qualifier = $_POST['qualifier'];
    $teamname = $_POST['teamname'];
    $teamcity = $_POST['teamcity'];

    $playeronename = $_POST['teamonename'];
    $playeronemobile = $_POST['teamonemobile'];
    $playeroneemail = $_POST['teamoneemail'];

    $playertwoname = $_POST['teamtwoname'];
    $playertwomobile = $_POST['teamtwomobile'];
    $playertwoemail = $_POST['teamtwoemail'];

    $playerthreename = $_POST['teamthreename'];
    $playerthreemobile = $_POST['teamthreemobile'];
    $playerthreeemail = $_POST['teamthreeemail'];

    $playerfourname = $_POST['teamfourname'];
    $playerfourmobile = $_POST['teamfourmobile'];
    $playerfouremail = $_POST['teamfouremail'];

    $playerfivename = $_POST['teamfivename'];
    $playerfivemobile = $_POST['teamfivemobile'];
    $playerfiveemail = $_POST['teamfiveemail'];

    $playersixname = $_POST['teamsixname'];
    $playersixmobile = $_POST['teamsixmobile'];
    $playersixemail = $_POST['teamsixemail'];

    //$teamid = 0;

    $query =  mysql_query("SELECT * FROM team");
    //$teamid = ++$teamid;

    while ($rows = mysql_fetch_array($query)) {
      $teamid = $rows['team_id'];
      //echo "TEAM ID " . $teamid;
      $teamid = ++$teamid;
      //echo "TEAM ID ++ " . $teamid;?>

      <!-- <table class="table table-bordered">
        <tr>
          <td style="text-align: left;"><?php echo $rows['team_name']; ?></td>
          <td style="text-align: left;"><?php echo $rows['team_city']; ?></td>
          <td style="text-align: left;"><?php echo $rows['team_qualifier']; ?></td>
        </tr>
      </table> -->


      <?php
    }



    if(!empty($teamname)) { //checking the 'user' name, is it empty or have some text
      //if (!$row = mysql_fetch_array($query) or die(mysql_error()))
      //$query = mysql_query("SELECT * FROM websiteusers WHERE userName = '$_POST[user]' AND pass = '$_POST[pass]'") or die(mysql_error());
      $insertTeam = mysql_query("INSERT INTO team (team_id, team_name, team_city, team_qualifier) VALUES ('$teamid', '$teamname','$teamcity', '$qualifier')") or die(mysql_error());
      $insertPlayerOne = mysql_query("INSERT INTO player (player_name, player_mobile, player_email, player_team) VALUES ('$playeronename','$playeronemobile', '$playeroneemail', '$teamid')") or die(mysql_error());
      $insertPlayerTwo = mysql_query("INSERT INTO player (player_name, player_mobile, player_email, player_team) VALUES ('$playertwoname','$playertwomobile', '$playertwoemail', '$teamid')") or die(mysql_error());
      $insertPlayerThree = mysql_query("INSERT INTO player (player_name, player_mobile, player_email, player_team) VALUES ('$playerthreename','$playerthreemobile', '$playerthreeemail', '$teamid')") or die(mysql_error());
      $insertPlayerFour = mysql_query("INSERT INTO player (player_name, player_mobile, player_email, player_team) VALUES ('$playerfourname','$playerfourmobile', '$playerfouremail', '$teamid')") or die(mysql_error());
      $insertPlayerFive = mysql_query("INSERT INTO player (player_name, player_mobile, player_email, player_team) VALUES ('$playerfivename','$playerfivemobile', '$playerfiveemail', '$teamid')") or die(mysql_error());
      $insertPlayerSix = mysql_query("INSERT INTO player (player_name, player_mobile, player_email, player_team) VALUES ('$playersixname','$playersixmobile', '$playersixemail', '$teamid')") or die(mysql_error());

      // if($insertTeam) { echo "TEAM ADDED"; }
      // if($insertPlayerOne) { echo "PLAYER ONE ADDED"; }
      // if($insertPlayerTwo) { echo "PLAYER TWO ADDED"; }
      // if($insertPlayerThree) { echo "PLAYER THREE ADDED"; }
      // if($insertPlayerFour) { echo "PLAYER FOUR ADDED"; }
      // if($insertPlayerFive) { echo "PLAYER FIVE ADDED"; }
      // if($insertPlayerSix) { echo "PLAYER SIX ADDED"; }

      echo "<script>alert("Team is successfully registered");</script>";

    } else {
      echo "TEAM ALREADY EXSISTS";
    }

    // while ($row = mysql_fetch_array($query)) {
    //   // echo "<table>";
    //   //   echo "<tr>";
    //   //     echo "<td>";
    //   //       echo "" . $team;
    //   //     echo "</td>";
    //   //   echo "</tr>";
    //   // echo "</table>";
    // }

  }

  function send_mail () {
    $to = "jain.ash297@gmail.com, harshthakkar46@gmail.com";
    $subject = "Success";

    $message = "
      <html>
      <head>
      <title>Success</title>
      </head>
      <body>
      <p>YOU ARE SUCCESSFULLY</p>
      <table>
      <tr>
      <th>TEAM NAME</th>
      <th>CAPTAIN NAME</th>
      </tr>
      <tr>
      </tr>
      </table>
      </body>
      </html>
    ";

    // Always set content-type when sending HTML email
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

    // More headers
    $headers .= 'From: <noreply@gmail.com>' . "\r\n";
    $headers .= 'Cc: jain.ash297@gmail.com' . "\r\n";

    mail($to,$subject,$message,$headers);
    echo "email sent";
  }

  if(isset($_POST['submit'])) {
    registration();
  }

  mysql_close($con);

?>
</body>
</html>
