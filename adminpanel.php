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

    <?php
      define('DB_HOST', 'localhost');
      define('DB_NAME', 'cgegloba_clanwarsregistration');
      define('DB_USER','root');
      define('DB_PASSWORD','');

      $con = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error());
      $db = mysql_select_db(DB_NAME, $con) or die("Failed to connect to MySQL: " . mysql_error());

    ?>

    <div class="container">
      <div class="row">
        <table class="table">
          <tr>
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
          "SELECT team.team_name, team.team_city, team.team_qualifier,
            player.player_name, player.player_mobile, player.player_email
            FROM team
            INNER JOIN player
            ON team.team_id = player.player_team"
          );
          $queryp =  mysql_query("SELECT * FROM player");
          while ($rows = mysql_fetch_array($queryt)) {

           ?>
          <tr>
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
