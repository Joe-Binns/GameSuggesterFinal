<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Game Suggester-</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="style.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
</head>
<!---------------------- PAGE LAYOUT ----------------->
<body>
  <!---------------------- NAR BAR ----------------->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
        <a href="#" class="navbar-brand">Game Suggester</a>
        <!---------------------- NAVIGATION BUTTONS ----------------->
          <div class="navbar-nav">
              <a href="#" class="nav-item nav-link active" href="#startPageLayout">Home</a>
              <a href="#" class="nav-item nav-link" href="#game-selector">Game Suggester</a>
          </div>
        <!---------------------- LOGIN/SIGNUP BUTTONS ----------------->
          <div class="navbar-nav ms-auto">              	
              <a href="#" class="nav-item nav-link" id="nav-link-login">Login</a>
            	<a href="#" class="nav-item nav-link" id="nav-link-register">Register</a>
          </div>
        </div>
    </nav>
  <!---------------------- INTRO LAYOUT ELEMENTS ----------------->
    <div class="container" id="startPageLayout">
      <!---------------------- LANDING PAGE INTRO ----------------->
        <div class="p-5 my-4 bg-light rounded-3">
          <h1>Can't find a game to play?</h1>
          <p class="lead">Welcome to <b>Game Suggester!</b> Are you tired of browsing through endless lists of games, 
            only to find out they're outside of your budget? Look no further!
          </p>
          <p class="lead">Our website allows you to input your desired budget and receive personalized game suggestions. 
            Whether you're a console or PC gamer, our database has something for <b>everyone.</b> Get ready to discover your next favorite game 
            without breaking the bank!
          </p>
        </div>
      <!---------------------- RECOMMENDED GAME CARDS ----------------->
        <!---------------------- TOP ROW GAME CARDS ----------------->
        <div class="row g-3">
          <!---------------------- RECOMMENDED GAME CARD #1 ----------------->
            <div class="col-md-6 col-lg-4 col-xl-3">
              <div class="card">
                <img class="card-img-top" src="Images/PhantomBrigade.jpg" alt="PhantomBrigade">
                <div class="card-body">
                  <h5 class="card-title">Phantom Brigade</h5>
                  <p class="card-text">A turn-based tactical RPG where players command a squad of mechs to fight against a mysterious enemy force in a post-apocalyptic world.</p> 
                  <div class="row g-1" id="card-price-row">
                    <div class="col-sm-8">
                      <p> 4.1 | Reviews: 712</p>
                    </div>
                    <div class="col-sm-4">
                      <p>$32.99</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          <!---------------------- RECOMMENDED GAME CARD #2 ----------------->
            <div class="col-md-6 col-lg-4 col-xl-3">
              <div class="card">
                <img class="card-img-top" src="Images/ApexLegends.jpg" alt="ApexLegends">
                <div class="card-body">
                  <h5 class="card-title">Apex Legends</h5>
                  <p class="card-text">A free-to-play battle royale game where players choose from a roster of unique characters with special abilities and fight for survival.</p>
                  <div class="row g-1" id="card-price-row">
                    <div class="col-sm-8">
                      <p> 4.2 | Reviews: 21312</p>
                    </div>
                    <div class="col-sm-4">
                      <p>FREE</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          <!---------------------- RECOMMENDED GAME CARD #3 ----------------->
            <div class="col-md-6 col-lg-4 col-xl-3">
              <div class="card">
                <img class="card-img-top" src="Images/CallOfDutyMW2.jpg" alt="CallOfDutyMW2">
                <div class="card-body">
                  <h5 class="card-title">Call Of Duty: MW2</h5>
                  <p class="card-text">	A first-person shooter game that follows a special ops team as they try to prevent a Russian invasion in the United States.</p> 
                  <div class="row g-1" id="card-price-row">
                    <div class="col-sm-8">
                      <p> 3.9 | Reviews: 1762</p>
                    </div>
                    <div class="col-sm-4">
                      <p>$79.99</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          <!---------------------- RECOMMENDED GAME CARD #4 ----------------->
            <div class="col-md-6 col-lg-4 col-xl-3">
              <div class="card">
                <img class="card-img-top" src="Images/LumenCraft.jpg" alt="LumenCraft">
                <div class="card-body">
                  <h5 class="card-title">Lumencraft</h5>
                  <p class="card-text">A single-player action-adventure game set in a magical world where players must use their luminescent powers to solve puzzles and fight enemies.</p>
                  <div class="row g-1" id="card-price-row">
                    <div class="col-sm-8">
                      <p> 4.6 | Reviews: 2312</p>
                    </div>
                    <div class="col-sm-4">
                      <p>$18.99</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
        <!---------------------- BOTTOM ROW GAME CARDS ----------------->
        <div class="row g-3">
          <!---------------------- RECOMMENDED GAME CARD #5 ----------------->
            <div class="col-md-6 col-lg-4 col-xl-3">
              <div class="card">
                <img class="card-img-top" src="Images/RocketLeague.jpg" alt="RocketLeague">
                <div class="card-body">
                  <h5 class="card-title">Rocket League</h5>
                  <p class="card-text">High-flying, rocket-powered cars collide in a fast-paced blend of soccer and vehicular mayhem.</p>
                  <div class="row g-1" id="card-price-row">
                    <div class="col-sm-8">
                      <p> 4.5 | Reviews: 2314</p>
                    </div>
                    <div class="col-sm-4">
                      <p>FREE</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          <!---------------------- RECOMMENDED GAME CARD #6 ----------------->
            <div class="col-md-6 col-lg-4 col-xl-3">
              <div class="card">
                <img class="card-img-top" src="Images/ForzaHorizon5.jpg" alt="ForzaHorizon5">
                <div class="card-body">
                  <h5 class="card-title">Forza Horizon 5</h5>
                  <p class="card-text">	Gorgeous open-world racing game set in Mexico, featuring a huge variety of cars and events to compete in, and stunning visuals.</p>
                  <div class="row g-1" id="card-price-row">
                    <div class="col-sm-8">
                      <p> 4.0 | Reviews: 1193</p>
                    </div>
                    <div class="col-sm-4">
                      <p>$79.99</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          <!---------------------- RECOMMENDED GAME CARD #7 ----------------->
            <div class="col-md-6 col-lg-4 col-xl-3">
              <div class="card">
                <img class="card-img-top" src="Images/GTA5.jpg" alt="GTA5">
                <div class="card-body">
                  <h5 class="card-title">Grand Theft Auto: 5</h5>
                  <p class="card-text">Open-world crime simulator where players can explore a massive, dynamic world and experience a gripping story full of heists and danger.</p>
                  <div class="row g-1" id="card-price-row">
                    <div class="col-sm-8">
                      <p> 4.6 | Reviews: 61762</p>
                    </div>
                    <div class="col-sm-4">
                      <p>$39.99</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          <!---------------------- RECOMMENDED GAME CARD #8 ----------------->
            <div class="col-md-6 col-lg-4 col-xl-3">
              <div class="card">
                <img class="card-img-top" src="Images/Valorant.jpg" alt="Valorant">
                <div class="card-body">
                  <h5 class="card-title">Valorant</h5>
                  <p class="card-text">	Tactical 5v5 first-person shooter with a diverse cast of characters, unique abilities, and precise gunplay.</p>
                  <div class="row g-1" id="card-price-row">
                    <div class="col-sm-8">
                      <p> 3.9 | Reviews: 3192</p>
                    </div>
                    <div class="col-sm-4">
                      <p>FREE</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
      <hr>
    </div>
  <!---------------------- GAME SELECTOR ----------------->
    <div class="container">
      <div class="p-5 my-4 rounded-3">
        <h1 id="game-selector-header" >Game Suggester</h1>
      <!---------------------- GAME SELECTOR WINDOW ----------------->
        <div id="game-selector">
          <div class="row" id="game-selector-canvas">
            <div class="row">
              <?php 
                if(!empty($get_game)) {
                  echo "<table>";
                  foreach ($get_game as $key => $val) {
                      //Output a row in the table for each game
                      echo "<tr>";
                      echo "<th>" . $key . "</th>";
                      echo "<td>" . $val . "</td>";
                      echo "</tr>";
                  }
                  echo "</table>";
                }
              ?>
            </div>
          </div>
        </div>
      <!---------------------- GAME SELECTOR BUTTONS ----------------->
        <div class="row" id="game-selector-buttons-row">
          <div class="col-sm-2" class="game-selector-buttons"><p><a id="modal-form-game-selector-buttons-getgame" class="btn btn-success btn-lg">Get Game</a></p></div>
        </div>
      </div>
    </div>
  <!---------------------- MODAL WINDOWS ----------------->
    <div id="modal-window"></div>
    <!---------------------- LOGIN ----------------->
      <div class="modal-content" id="modal-login">
        <div class="modal-header">
          <h5 class="modal-title" id="modalLongTitle">Login</h5>
        </div>
        <div class="modal-body">
          <form id="form-login" autocomplete="off" method="post" action="https://cs.tru.ca/~w3jbinns/GameSuggester/controller.php">
              <input type="hidden" name="page" value="StartPage">
              <input type="hidden" name="command" value="LogIn">
              <div class="row">
                <div class="col sm-4"><h>Username: <?php if(!empty($error_msg_username)) echo $error_msg_username; ?></h></div>
                <div class="col sm-10"><input class="form-login-entries" type="text" name="username" required></div>
              </div>
              <div class="row">
                <div class="col sm-4"><h>Password: <?php if(!empty($error_msg_password)) echo $error_msg_password; ?></h></div>
                <div class="col sm-10"><input class="form-login-entries" type="password" name="password" required></div>
              </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" id="modal-form-close-login">Close</button>
          <button class="btn btn-dark" id="modal-form-save-login" type="submit" form="form-login">Save changes</button>
        </div>
      </div>
    <!---------------------- SIGNUP ----------------->
      <div class="modal-content" id="modal-register">
        <div class="modal-header">
          <h5 class="modal-title" id="modalLongTitle">Register</h5>
        </div>
        <div class="modal-body">
          <form id="form-register" autocomplete="off" method="post" action="https://cs.tru.ca/~w3jbinns/GameSuggester/controller.php">
              <input type="hidden" name="page" value="StartPage">
              <input type="hidden" name="command" value="Register">
              <div class="row">
                <div class="col sm-4"><h>Username: <?php if(!empty($error_msg_username)) echo $error_msg_username; ?></h></div>
                <div class="col sm-10"><input class="form-register-entries" type="text" name="username" required></div>
              </div>
              <div class="row">
                <div class="col sm-4"><h>Password: <?php if(!empty($error_msg_password)) echo $error_msg_password; ?></h></div>
                <div class="col sm-10"><input class="form-register-entries" onfocus="this.value='',this.type='password'" value="1+ Numbers,Special character" type="text" name="password" required></div>
              </div>
              <div class="row">
                <div class="col sm-4"><h>Email: <?php if(!empty($error_msg_email)) echo $error_msg_email; ?></h></div>
                <div class="col sm-10"><input class="form-register-entries" onfocus="this.value=''" value="Valid email" type="text" name="email" required></div>
              </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" id="modal-form-close-register">Close</button>
          <button class="btn btn-dark" id="modal-form-save-register" type="submit" form="form-register">Save changes</button>
        </div>
      </div>
    <!---------------------- GAME SELECTOR OPTIONS ----------------->
      <!---------------------- GET GAME ----------------->
        <div class="modal-content" id="modal-game-selector-get-game-start">
          <div class="modal-header">
            <h5 class="modal-title" id="modalLongTitle">Get a game</h5>
          </div>
          <div class="modal-body">
            <form id="form-game-selector-get-game-start" method="post" action="https://cs.tru.ca/~w3jbinns/GameSuggester/controller.php">
                <input type="hidden" name="page" value="StartPage">
                <input type="hidden" name="command" value="Get-game">
                <div class="row">
                  <div class="col sm-4"><h>Budget: </h></div>
                  <div class="col sm-10"><input class="form-register-entries" onfocus="this.value=''" value="Enter budget (optional)" type="text" name="price"></div>
                </div>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" id="modal-form-close-get-game">Close</button>
            <button class="btn btn-dark" id="modal-form-get-get-game-start" type="submit" form="form-game-selector-get-game-start">Get game</button>
          </div>
        </div>
    </div>
  <!---------------------- FOOTER ----------------->
    <footer>
      <div class="row">
          <div class="col-md-6" id="footer-item">
              <a>Copyright © 2023 GameTogether Inc</a>
          </div>
          <div class="col-md-6" id="footer-item">
              <a href="#" class="text-dark">Terms of Use | Privacy Policy</a>
          </div>
      </div>
    </footer>
</body>
</html>

<script>
  //-------------------- LOGIN/REGISTER/GAME SELECTOR SCRIPTS/LISTENERS
    //---------------------- LISTENERS ---------------------
      //---------------------- LOGIN/SIGNUP OPTIONS ------------------
        //SHOW login modal
        $("#nav-link-login").click(function() {
          displayLogin();
        });
        //REMOVE login modal
        $("#modal-form-close-login").click(function() {
          displayCancelAll();
        });

        //SHOW signup modal
        $("#nav-link-register").click(function() {
            displaySignup();
        });
        //REMOVE signup modal
        $("#modal-form-close-register").click(function() {
            displayCancelAll();
        });
      //---------------------- GAME SELECTOR ------------------
        //SHOW getgame modal
        $("#modal-form-game-selector-buttons-getgame").click(function() {
          displayGetGame();
        });
        //REMOVE getgame modal
        $("#modal-form-close-get-game").click(function() {
          displayCancelAll();
        });
        //REMOVE getgame modal when SUBMIT get a game request from getgame modal
        $("#modal-form-get-get-game-start").click(function() {
          displayCancelAll();
        });
    //---------------------- SCRIPTS ---------------------
      //--------------------- REMOVE ALL ------------ 
        //REMOVE all modals
        function displayCancelAll() {
          $("#modal-window").css("display", "none");
          $("#modal-login").css("display", "none");
          $("#modal-register").css("display", "none");
          $("#modal-game-selector-get-game-start").css("display", "none");
        }
      //--------------------- LOGIN/SIGNUP OPTIONS --------------
        //SHOW login modal
        function displayLogin() {
          $("#modal-login").css("display", "block");
          $("#modal-window").css("display", "block");
        }
        //SHOW signup modal
        function displaySignup() {
          $("#modal-register").css("display", "block");
          $("#modal-window").css("display", "block");
        }
      //---------------------- GAME SELECTOR ------------------
        //SHOW addgame modal
        function displayGetGame() {
          $("#modal-game-selector-get-game-start").css("display", "block");
          $("#modal-window").css("display", "block");
        }
  //--------------------- PHP --------------
    <?php
        if ($display_modal_window == 'modal-login') 
            echo "displayLogin();";
        else if ($display_modal_window == 'modal-signup') 
            echo "displaySignup();";
        else
            ;
    ?>
</script>