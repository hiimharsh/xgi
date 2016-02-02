<?php

  define('DB_HOST', 'localhost');
  define('DB_NAME', 'cgegloba_clanwarsregistration');
  define('DB_USER','root');
  define('DB_PASSWORD','');

  session_start();
  if (!isset($_SESSION['userid'])) {
    ?>

    <script>
      window.location = "login.php";
    </script>

    <?php
  }

  $con = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error());
  $db = mysql_select_db(DB_NAME, $con) or die("Failed to connect to MySQL: " . mysql_error());

  if (isset($_GET['download'])) {
    download();
  }
  // Original PHP code by Chirp Internet: www.chirp.com.au
  // Please acknowledge use of this code by including this header.
  function download() {
    function cleanData(&$str)
    {
      if($str == 't') $str = 'TRUE';
      if($str == 'f') $str = 'FALSE';
      if(preg_match("/^0/", $str) || preg_match("/^\+?\d{8,}$/", $str) || preg_match("/^\d{4}.\d{1,2}.\d{1,2}/", $str)) {
        $str = "'$str";
      }
      if(strstr($str, '"')) $str = '"' . str_replace('"', '""', $str) . '"';
    }

    // filename for download
    $filename = "website_data_" . date('Ymd') . ".csv";

    header("Content-Disposition: attachment; filename=\"$filename\"");
    header("Content-Type: text/csv");

    $out = fopen("php://output", 'w');

    $flag = false;
    $result = mysql_query(
    "SELECT team.team_id, team.team_name, team.team_city, team.team_qualifier,
      player.player_name, player.player_mobile, player.player_email
      FROM team
      INNER JOIN player
      ON team.team_id = player.player_team"
    ) or die('Query failed!');
    while(false !== ($row = mysql_fetch_assoc($result))) {
      if(!$flag) {
        // display field/column names as first row
        fputcsv($out, array_keys($row), ',', '"');
        $flag = true;
      }
      array_walk($row, 'cleanData');
      fputcsv($out, array_values($row), ',', '"');
    }
    fclose($out);
    exit;
  }
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="css/bootstrap.css" title="no title" charset="utf-8">
    <link rel="stylesheet" href="css/table.css" title="no title" charset="utf-8">
    <style>
      body { background-color: #eee; }
      table { margin: 20px 0; padding: 0 20px; background-color: white; }
      table tr:first-child { background-color: #333; color: white; }
    </style>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="logout-button" style="margin-top: 20px;">
          <a href="adminpanel.php?download=true">Export as CSV (Excel)</a>
          <a href="logout.php" style="float:right">Logout</a>
        </div>
        <table class="table">
          <tr>
            <th>Team Id</th>
            <th>Team Name</th>
            <th>Team City</th>
            <th>Team Qualifier</th>
            <th>Player Name</th>
            <th>Player Mobile</th>
            <th>Player Email</th>
          </tr>
          <?php

          $query =  mysql_query("SELECT * FROM team");
          $queryt =  mysql_query(
          "SELECT team.team_id, team.team_name, team.team_city, team.team_qualifier,
            player.player_name, player.player_mobile, player.player_email
            FROM team
            INNER JOIN player
            ON team.team_id = player.player_team"
          );
          $queryp =  mysql_query("SELECT * FROM player");
          while ($rows = mysql_fetch_array($queryt)) {

           ?>
          <tr>
            <td><?php echo "".$rows['team_id']; ?></td>
            <td><?php echo "".$rows['team_name']; ?></td>
            <td><?php echo "".$rows['team_city']; ?></td>
            <td><?php echo "".$rows['team_qualifier']; ?></td>
            <td><?php echo "".$rows['player_name']; ?></td>
            <td><?php echo "".$rows['player_mobile']; ?></td>
            <td><?php echo "".$rows['player_email']; ?></td>
          </tr>

          <?php } ?>
        </table>
      </div>
    </div>

    <?php
      mysql_close($con);
    ?>

  </body>
</html>
