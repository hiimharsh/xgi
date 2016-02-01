<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset="UTF-8" />
    <title>
        Zionram | Gamer registration
    </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
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
<form action="registration.php" method="post">
  <h1>GAMER REGISTRATION</h1>
  <div class="inset text-uppercase">
    <div class="row">
      <div class="col-md-4">
        <p>
          <label for="qualifier">Qualifier:</label>
          <select class="text-uppercase" name="qualifier">
            <option value="select">Please Select</option>
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
</body>
</html>
