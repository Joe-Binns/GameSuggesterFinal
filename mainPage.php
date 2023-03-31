<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Game Together</title>
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
              <a href="#" class="nav-item nav-link active" href="#mainPageLayout">Home</a>
              <a href="#" class="nav-item nav-link" href="#game-selector">Game Suggester</a>
          </div>
        <!---------------------- PROFILE/SIGNOUT BUTTONS ----------------->
          <div class="navbar-nav ms-auto">              	
              <a href="#" class="nav-item nav-link" id="nav-link-profile">Profile</a>
            	<a href="#" class="nav-item nav-link" id="nav-link-signout">Sign-out</a>
          </div>
      </div>
    </nav>
  <!---------------------- INTRO LAYOUT ELEMENTS ----------------->
    <div class="container" id="mainPageLayout">
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
        <h1>Game Suggester</h1>
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
            <div class="col-sm-2" class="game-selector-buttons"><p><a id="modal-form-game-selector-buttons-getgame-main" class="btn btn-success btn-lg">Get Game</a></p></div>
            <div class="col-sm-2" class="game-selector-buttons" id="modal-form-game-selector-buttons-addgame"><p><a  class="btn btn-dark btn-lg">Add Game</a></p></div>
            <div class="col-sm-2" class="game-selector-buttons" id="modal-form-game-selector-buttons-searchgame"><p><a  class="btn btn-dark btn-lg">Search Game</a></p></div>
            <div class="col-sm-2" class="game-selector-buttons" id="modal-form-game-selector-buttons-updateprice"><p><a  class="btn btn-dark btn-lg">Update Price</a></p></div>
            <div class="col-sm-2" class="game-selector-buttons" id="modal-form-game-selector-buttons-updatedescription"><p><a  class="btn btn-dark btn-lg">Update Desc</a></p></div>
            <div class="col-sm-2" class="game-selector-buttons" id="modal-form-game-selector-buttons-deletegame"><p><a  class="btn btn-danger btn-lg">Delete Game</a></p></div>
          </div>
      </div>
    </div>
  <!---------------------- MODAL WINDOWS ----------------->
    <div id="modal-window"></div>
      <!---------------------- PROFILE OPTIONS ----------------->
        <!---------------------- PROFILE ----------------->
          <div class="modal-content" id="modal-profile">
            <div class="modal-header">
              <h5 class="modal-title" id="modalLongTitle">Profile</h5>
            </div>
            <div class="modal-body">
              <!-- update email -->
              <div class="row">
                <div class="col sm-4">Username: <?php if(!empty($_SESSION['username'])) echo $_SESSION['username']; ?></div>
                <div class="col sm-8"><button type="button" class="btn btn-dark" id="modal-update-email">Update Email</button></div>
              </div>
               <!-- update Password -->
              <div class="row">
                <div class="col sm-4">Email: <?php if(!empty($_SESSION['email'])) echo $_SESSION['email']; ?></div>
                <div class="col sm-8"><button type="button" class="btn btn-dark" id="modal-update-password">Update Password</button></div>
              </div>
               <!-- Delete account -->
              <div class="row">
                <div class="col sm-4"></div>
                <div class="col sm-8"><button type="button" class="btn btn-danger" id="modal-delete-account">Delete Account</button></div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" id="modal-close-profile">Close</button>
            </div>
          </div>
        <!---------------------- UPDATE EMAIL ----------------->
          <div class="modal-content" id="modal-profile-email">
            <div class="modal-header">
              <h5 class="modal-title" id="modalLongTitle">Update Email</h5>
            </div>
            <div class="modal-body">
              <form id="form-profile-email" autocomplete="off" method="post" action="https://cs.tru.ca/~w3jbinns/GameSuggester/controller.php">
                <input type="hidden" name="page" value="MainPage">
                <input type="hidden" name="command" value="Email">
                <div class="row">
                  <div class="col sm-2"></div>  
                  <div class="col sm-8"><h>Enter in your new email: <?php if(!empty($error_msg_email)) echo $error_msg_email; ?></h></div>
                  <div class="col sm-2"></div>
                </div>
                <div class="row">
                  <div class="col sm-1"></div>
                  <div class="col sm-10"><input class="form-email-entries" type="text" name="email" required></div>
                  <div class="col sm-1"></div>
                </div>
              </form>
            </div>
            <div class="modal-footer">
              <button class="btn btn-dark" id="modal-form-save-email" type="submit" form="form-profile-email">Save changes</button>
              <button type="button" class="btn btn-danger" id="modal-close-profile-email">Back</button>
            </div>
          </div>
        <!---------------------- UPDATE PASSWORD ----------------->
          <div class="modal-content" id="modal-profile-password">
            <div class="modal-header">
              <h5 class="modal-title" id="modalLongTitle">Update Password</h5>
            </div>
            <div class="modal-body">
              <form id="form-profile-password" autocomplete="off" method="post" action="https://cs.tru.ca/~w3jbinns/GameSuggester/controller.php">
                <input type="hidden" name="page" value="MainPage">
                <input type="hidden" name="command" value="Password">
                <div class="row">
                  <div class="col sm-2"></div>  
                  <div class="col sm-8"><h>Enter in your new password: <?php if(!empty($error_msg_password)) echo $error_msg_password; ?></h></div>
                  <div class="col sm-2"></div>
                </div>
                <div class="row">
                  <div class="col sm-1"></div>
                  <div class="col sm-10"><input class="form-password-entries" type="text" name="password" required></div>
                  <div class="col sm-1"></div>
                </div>
              </form>
            </div>
            <div class="modal-footer">
              <button class="btn btn-dark" id="modal-form-save-password" type="submit" form="form-profile-password">Save changes</button>
              <button type="button" class="btn btn-danger" id="modal-close-profile-password">Back</button>
            </div>
          </div>
        <!---------------------- DELETE LOGIN ----------------->
          <div class="modal-content" id="modal-profile-delete">
            <div class="modal-header">
              <h5 class="modal-title" id="modalLongTitle">Delete Account</h5>
            </div>
            <div class="modal-body">
              <form id="form-profile-delete" autocomplete="off" method="post" action="https://cs.tru.ca/~w3jbinns/GameSuggester/controller.php">
                <input type="hidden" name="page" value="MainPage">
                <input type="hidden" name="command" value="Delete">
                <div class="row">
                  <div class="col sm-2"></div>  
                  <div class="col sm-8"><h>Type your username to delete login: <?php if(!empty($error_msg_delete)) echo $error_msg_delete; ?></h></div>
                  <div class="col sm-2"></div>
                </div>
                <div class="row">
                  <div class="col sm-1"></div>
                  <div class="col sm-10"><input class="form-delete-entries" type="text" name="delete" required></div>
                  <div class="col sm-1"></div>
                </div>
              </form>
            </div>
            <div class="modal-footer">
              <button class="btn btn-warning" id="modal-form-save-delete" type="submit" form="form-profile-delete">Delete Account</button>
              <button type="button" class="btn btn-danger" id="modal-close-profile-delete">Back</button>
            </div>
          </div>

      <!---------------------- SIGNOUT ----------------->
        <div class="modal-content" id="modal-signout">
          <div class="modal-header">
            <h5 class="modal-title" id="modalLongTitle">Signout</h5>
          </div>
          <div class="modal-body">
            <form id="form-game-selector-signout" method="post" action="https://cs.tru.ca/~w3jbinns/GameSuggester/controller.php">
              <input type="hidden" name="page" value="MainPage">
              <input type="hidden" name="command" value="Signout">
              <div class="row">
                <div class="col sm-4"><h>Are you sure you want to logout?: </h></div>
                <div class="col sm-10"><input class="form-register-entries" type="submit" name="submit" required></div>
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" id="modal-close-signout">Close</button>
          </div>
        </div>
    <!---------------------- GAME SELECTOR OPTIONS ----------------->
      <!---------------------- UPDATE GAME (DESCRIPTION) ----------------->
        <div class="modal-content" id="modal-game-selector-update-description-game">
          <div class="modal-header">
            <h5 class="modal-title" id="modalLongTitle">Update description</h5>
          </div>
          <div class="modal-body">
            <form id="form-game-selector-update-description-game" method="post" action="https://cs.tru.ca/~w3jbinns/GameSuggester/controller.php">
                <input type="hidden" name="page" value="MainPage">
                <input type="hidden" name="command" value="Updatedescription-game">
                <div class="row">
                  <div class="col sm-4"><h>Game title: <?php if(!empty($error_msg_updatedescription)) echo $error_msg_updatedescription; ?></h></div>
                  <div class="col sm-10"><input class="form-register-entries" type="text" name="name"></div>
                </div>
                <div class="row">
                  <div class="col sm-4"><h>New description: <?php if(!empty($error_msg_updatedescription)) echo $error_msg_updatedescription; ?></h></div>
                  <div class="col sm-10"><input class="form-register-entries" type="text" name="description"></div>
                </div>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" id="modal-form-close-update-description-game">Close</button>
            <button class="btn btn-dark" id="modal-form-update-description-game" type="submit" form="form-game-selector-update-description-game">Update description</button>
          </div>
        </div>
    
      <!---------------------- UPDATE GAME (PRICE) ----------------->
        <div class="modal-content" id="modal-game-selector-update-price-game">
          <div class="modal-header">
            <h5 class="modal-title" id="modalLongTitle">Update price</h5>
          </div>
          <div class="modal-body">
            <form id="form-game-selector-update-price-game" method="post" action="https://cs.tru.ca/~w3jbinns/GameSuggester/controller.php">
                <input type="hidden" name="page" value="MainPage">
                <input type="hidden" name="command" value="Updateprice-game">
                <div class="row">
                  <div class="col sm-4"><h>Game title: <?php if(!empty($error_msg_updateprice)) echo $error_msg_updateprice; ?></h></div>
                  <div class="col sm-10"><input class="form-register-entries" type="text" name="name"></div>
                </div>
                <div class="row">
                  <div class="col sm-4"><h>New Price: <?php if(!empty($error_msg_updateprice)) echo $error_msg_updateprice; ?></h></div>
                  <div class="col sm-10"><input class="form-register-entries" type="text" name="price"></div>
                </div>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" id="modal-form-close-update-price-game">Close</button>
            <button class="btn btn-dark" id="modal-form-update-price-game" type="submit" form="form-game-selector-update-price-game">Update price</button>
          </div>
        </div>
      
      <!---------------------- DELETE GAME ----------------->
        <div class="modal-content" id="modal-game-selector-delete-game">
          <div class="modal-header">
            <h5 class="modal-title" id="modalLongTitle">Delete a Game</h5>
          </div>
          <div class="modal-body">
            <form id="form-game-selector-delete-game" method="post" action="https://cs.tru.ca/~w3jbinns/GameSuggester/controller.php">
                <input type="hidden" name="page" value="MainPage">
                <input type="hidden" name="command" value="Delete-game">
                <div class="row">
                  <div class="col sm-4"><h>Game title: <?php if(!empty($error_msg_deletegame)) echo $error_msg_deletegame; ?></h></div>
                  <div class="col sm-10"><input class="form-register-entries" type="text" name="name"></div>
                </div>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" id="modal-form-close-delete-game">Close</button>
            <button class="btn btn-dark" id="modal-form-delete-game" type="submit" form="form-game-selector-delete-game">Delete game</button>
          </div>
        </div>
      <!---------------------- SEARCH GAME ----------------->
        <div class="modal-content" id="modal-game-selector-search-game">
          <div class="modal-header">
            <h5 class="modal-title" id="modalLongTitle">Search for a Game</h5>
          </div>
          <div class="modal-body">
            <form id="form-game-selector-search-game" method="post" action="https://cs.tru.ca/~w3jbinns/GameSuggester/controller.php">
                <input type="hidden" name="page" value="MainPage">
                <input type="hidden" name="command" value="Search-game">
                <div class="row">
                  <div class="col sm-4"><h>Game title: <?php if(!empty($error_msg_searchgame)) echo $error_msg_searchgame; ?></h></div>
                  <div class="col sm-10"><input class="form-register-entries" type="text" name="name"></div>
                </div>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" id="modal-form-close-search-game">Close</button>
            <button class="btn btn-dark" id="modal-form-search-game" type="submit" form="form-game-selector-search-game">Search game</button>
          </div>
        </div>
      <!---------------------- GET GAME ----------------->
        <div class="modal-content" id="modal-game-selector-get-game-main">
          <div class="modal-header">
            <h5 class="modal-title" id="modalLongTitle">Get a game</h5>
          </div>
          <div class="modal-body">
            <form id="form-game-selector-get-game-main" method="post" action="https://cs.tru.ca/~w3jbinns/GameSuggester/controller.php">
                <input type="hidden" name="page" value="MainPage">
                <input type="hidden" name="command" value="Get-game">
                <div class="row">
                  <div class="col sm-4"><h>Budget: </h></div>
                  <div class="col sm-10"><input class="form-register-entries" onfocus="this.value=''" value="Enter budget (optional)" type="text" name="price"></div>
                </div>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" id="modal-form-close-get-game-main">Close</button>
            <button class="btn btn-dark" id="modal-form-get-get-game-main" type="submit" form="form-game-selector-get-game-main">Get game</button>
          </div>
        </div>
      <!---------------------- ADD GAME ----------------->
        <div class="modal-content" id="modal-game-selector-add-game">
          <div class="modal-header">
            <h5 class="modal-title" id="modalLongTitle">Add a Game</h5>
          </div>
          <div class="modal-body">
            <form id="form-game-selector-add-game" method="post" action="https://cs.tru.ca/~w3jbinns/GameSuggester/controller.php">
                <input type="hidden" name="page" value="MainPage">
                <input type="hidden" name="command" value="Add-game">
                <div class="row">
                  <div class="col sm-4"><h>Name: <?php if(!empty($error_msg_addgame)) echo $error_msg_addgame; ?></h></div>
                  <div class="col sm-10"><input class="form-register-entries" type="text" name="name" required></div>
                </div>
                <div class="row">
                  <div class="col sm-4"><h>Price: <?php if(!empty($error_msg_addgame)) echo $error_msg_addgame; ?></h></div>
                  <div class="col sm-10"><input class="form-register-entries" type="text" name="price" required></div>
                </div>
                <div class="row">
                  <div class="col sm-4"><h>Short Description: <?php if(!empty($error_msg_addgame)) echo $error_msg_addgame; ?></h></div>
                  <div class="col sm-10"><input class="form-register-entries" type="text" name="about" required></div>
                </div>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" id="modal-form-close-add-game">Close</button>
            <button type="submit" class="btn btn-dark" form="form-game-selector-add-game" id="modal-form-add-add-game">Add game</button>
          </div>
        </div>
    </div> 
  <!---------------------- FOOTER ----------------->
    <footer>
      <div class="row">
          <div class="col-md-6" id="footer-item">
              <a>Copyright © 2023 GameSuggester Inc</a>
          </div>
          <div class="col-md-6" id="footer-item">
              <a href="#" class="text-dark">Terms of Use | Privacy Policy</a>
          </div>
      </div>
    </footer>
</body>
</html>

<script>
  //-------------------- SIGNOUT/PROFILE/GAME SELECTOR SCRIPTS/LISTENERS
    //---------------------- LISTENERS ---------------------
      //---------------------- PROFILE OPTIONS ------------------
        //SHOW profile modal
        $("#nav-link-profile").click(function() {
          displayProfile();
        });
        //REMOVE profile modal
        $("#modal-close-profile").click(function() {
          displayCancelProfile();
        });

        //EMAIL MODAL
        //SHOW updateemail modal
        $("#modal-update-email").click(function() {
          displayProfileEmail();
        });
        //REMOVE updateemail modal SHOW profile modal
        $("#modal-close-profile-email").click(function() {
          displayProfileBack();
        });

        //PASSWORD MODAL
        //SHOW updatepassword modal
        $("#modal-update-password").click(function() {
          displayProfilePassword();
        });
        //REMOVE updatepassword modal SHOW profile modal
        $("#modal-close-profile-password").click(function() {
          displayProfileBack();
        });

        //DELETE LOGIN MODAL
        //SHOW deletelogin modal
        $("#modal-delete-account").click(function() {
          displayProfileDelete();
        });
        //REMOVE deletelogin modal SHOW profile modal
        $("#modal-close-profile-delete").click(function() {
          displayProfileBack();
        });
        //SHOW signout modal
        $("#nav-link-signout").click(function() {
          displaySignout();
        });
        //REMOVE signout modal
        $("#modal-close-signout").click(function() {
          displayCancelSignout();
        });

      //---------------------- GAME SELECTOR ------------------
        //---------------------- UPDATE GAME (DESCRIPTION) ------------------
          //SHOW updatedescription modal
          $("#modal-form-game-selector-buttons-updatedescription").click(function() {
            displayUpdateDescGame();
          });
          //REMOVE updatedescription modal
          $("#modal-form-close-update-description-game").click(function() {
            displayCancelAll();
          });
          //REMOVE updatedescription modal when SUBMIT update desc request from updatedescription modal 
          $("#modal-form-update-description-game").click(function() {
            displayCancelAll();
          });
      
        //---------------------- UPDATE GAME (PRICE) ------------------
          //SHOW updateprice modal
          $("#modal-form-game-selector-buttons-updateprice").click(function() {
            displayUpdatePriceGame();
          });
          //REMOVE updateprice modal
          $("#modal-form-close-update-price-game").click(function() {
            displayCancelAll();
          });
          //REMOVE updateprice modal when SUBMIT update price request from updateprice modal 
          $("#modal-form-update-price-game").click(function() {
            displayCancelAll();
          });
      
        //---------------------- DELETE GAME ------------------
          //SHOW searchgame modal
          $("#modal-form-game-selector-buttons-deletegame").click(function() {
            displayDeleteGame();
          });
          //REMOVE searchgame modal
          $("#modal-form-close-delete-game").click(function() {
            displayCancelAll();
          });
          //REMOVE searchgame modal when SUBMIT search a game request from searchgame modal 
          $("#modal-form-delete-game").click(function() {
            displayCancelAll();
          });

        //---------------------- SEARCH GAME ------------------
          //SHOW searchgame modal
          $("#modal-form-game-selector-buttons-searchgame").click(function() {
            displaySearchGame();
          });
          //REMOVE searchgame modal
          $("#modal-form-close-search-game").click(function() {
            displayCancelAll();
          });
          //REMOVE searchgame modal when SUBMIT search a game request from searchgame modal 
          $("#modal-form-search-game").click(function() {
            displayCancelAll();
          });

        //---------------------- ADD GAME ------------------
          //SHOW addgame modal
          $("#modal-form-game-selector-buttons-addgame").click(function() {
            displayAddGame();
          });
          //REMOVE addgame modal
          $("#modal-form-close-add-game").click(function() {
            displayCancelAll();
          });
          //REMOVE addgame modal when SUBMIT add a game request from addgame modal 
          $("#modal-form-add-add-game").click(function() {
            displayCancelAll();
          });

        //---------------------- GET GAME ------------------
          //SHOW getgame modal
          $("#modal-form-game-selector-buttons-getgame-main").click(function() {
            displayGetGame();
          });
          //REMOVE getgame modal
          $("#modal-form-close-get-game-main").click(function() {
            displayCancelAll();
          });
          //REMOVE getgame modal when SUBMIT get a game request from getgame modal
          $("#modal-form-get-get-game-main").click(function() {
            displayCancelAll();
          });
      
    //---------------------- SCRIPTS ---------------------
      //--------------------- PROFILE OPTIONS --------------
        // SHOW profile modal
        function displayProfile() {
          $("#modal-profile").css("display", "block");
          $("#modal-window").css("display", "block");
        }
        // REMOVE profile modal
        function displayCancelProfile() {
          $("#modal-window").css("display", "none");
          $("#modal-profile").css("display", "none");
        }
        // SHOW updateemail modal
        function displayProfileEmail() {
          $("#modal-profile").css("display", "none");
          $("#modal-window").css("display", "block");
          $("#modal-profile-email").css("display", "block");
        }
        // REMOVE updateemail modal SHOW profile modal
        function displayProfilePassword() {
          $("#modal-profile").css("display", "none");
          $("#modal-window").css("display", "block");
          $("#modal-profile-password").css("display", "block");
        }
        // SHOW deleteprofile modal
        function displayProfileDelete() {
          $("#modal-profile").css("display", "none");
          $("#modal-window").css("display", "block");
          $("#modal-profile-delete").css("display", "block");
        }
        // REMOVE deleteprofile modal SHOW profile modal
        function displayProfileBack() {
          $("#modal-profile-email").css("display", "none");
          $("#modal-profile-password").css("display", "none");
          $("#modal-profile-delete").css("display", "none");
          $("#modal-profile").css("display", "block");
        }
      //--------------------- SIGNOUT --------------
        //SHOW signout modal
        function displaySignout() {
          $("#modal-window").css("display", "block");
          $("#modal-signout").css("display", "block");
        }
        //REMOVE signout modal
        function displayCancelSignout() {
          $("#modal-window").css("display", "none");
          $("#modal-signout").css("display", "none");
        }
      //--------------------- REMOVE ALL ------------ 
        //REMOVE all modals
        function displayCancelAll() {
          $("#modal-window").css("display", "none");
          $("#modal-signout").css("display", "none");
          $("#modal-profile-email").css("display", "none");
          $("#modal-profile").css("display", "none");
          $("#modal-game-selector-add-game").css("display", "none");
          $("#modal-game-selector-get-game-main").css("display", "none");
          $("#modal-game-selector-search-game").css("display", "none");
          $("#modal-game-selector-delete-game").css("display", "none");
          $("#modal-game-selector-update-price-game").css("display", "none");
          $("#modal-game-selector-update-description-game").css("display", "none");
        }
      //--------------------- GAME SELECTOR ------------ 
        //SHOW searchgame modal
        function displaySearchGame() {
          $("#modal-game-selector-search-game").css("display", "block");
          $("#modal-window").css("display", "block");
        }
        //SHOW updateprice modal
        function displayUpdatePriceGame() {
          $("#modal-game-selector-update-price-game").css("display", "block");
          $("#modal-window").css("display", "block");
        }
        //SHOW updatedescription modal
        function displayUpdateDescGame() {
          $("#modal-game-selector-update-description-game").css("display", "block");
          $("#modal-window").css("display", "block");
        }
        //SHOW addgame modal
        function displayAddGame() {
          $("#modal-game-selector-add-game").css("display", "block");
          $("#modal-window").css("display", "block");
        }
        //SHOW getgame modal
        function displayGetGame() {
          $("#modal-game-selector-get-game-main").css("display", "block");
          $("#modal-window").css("display", "block");
        }
        //SHOW deletegame modal
        function displayDeleteGame() {
          $("#modal-game-selector-delete-game").css("display", "block");
          $("#modal-window").css("display", "block");
        }

  // ---------------------- PHP ----------------------
    <?php
        if ($display_modal_window == 'modal-profile') 
            echo "displayProfile();";
        else if ($display_modal_window == 'modal-profile-email') 
            echo "displayProfileEmail();";
        else if ($display_modal_window == 'none')
            echo "displayCancelAll();";
        else
            ;
    ?>
</script>