<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset="UTF-8" />
    <title>
        Zionram | Gamer registration
    </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
</head>
  <body>

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

      <table class="table table-bordered">
        <tr>
          <td style="text-align: left;"><?php echo $rows['team_name']; ?></td>
          <td style="text-align: left;"><?php echo $rows['team_city']; ?></td>
          <td style="text-align: left;"><?php echo $rows['team_qualifier']; ?></td>
        </tr>
      </table>


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

  if(isset($_POST['submit'])) {
    registration();
  }

  mysql_close($con);

?>

</body>
</html>
