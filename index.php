<?php

require_once (__DIR__ . '/src/Model/Player.php');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
      <link rel="stylesheet" href="css/style.css"/>
  </head>
  <body>
  <div class="container col-md-3">
      <div class="row container-fluid">
          <img src="img/ping_pong.png" class="center-block img-responsive" alt="Ping Pong Front">
      </div>
      <div class="row container-fluid">
          <form method="GET" class="container-fluid" action="lookupPlayer.php">
              <legend>Login</legend>
              <div class="form-group">
                <label class="sr-only" for="rfid">RFID</label>
                  <input type="text" class="form-control mb-2 mr-sm-2 mb-sm-0" name="rfid" id="rfid"
                         placeholder="ID from RFID chip">
                <small class="form-text text-muted">You find your RFID on the blue chip</small>
              </div>
              <div class="form-group">
                  <button type="submit" class="btn btn-primary">Enter</button>
              </div>
          </form>
      </div>
  </div>
    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
  </body>
</html>