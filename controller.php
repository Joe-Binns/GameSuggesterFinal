<?php

// Start the session
session_start();

$display_modal_window = 'none';
$error_msg_username = '';
$error_msg_password = '';
$error_msg_email = '';
$error_msg_addgame = '';
$error_msg_searchgame = '';
$error_msg_deletegame = '';
$error_msg_updateprice = '';
$error_msg_updatedescription = '';
$get_game;

//Check for initial page
if (empty($_POST['page'])) {
    include("startPage.php");
    exit();
}

require('logic.php');
$page = $_POST['page'];

// When commands come from StartPage
if ($_POST['page'] == 'StartPage')
{
    $command = $_POST['command'];
    switch($command) {  // When a command is sent from the client
        case 'LogIn':  // With username and password
            if (username_password_valid($_POST['username'], $_POST['password']) == false) {
                $error_msg_username = '(Wrong username, or)';
                $error_msg_password = '(Wrong password)'; // Set an error message into a variable.
                $display_modal_window = 'modal-login';  // It will display the start page with the LogIn box.
                include('startPage.php');
            } 
            else {
                //Set session variables
                $_SESSION['username'] = ($_POST['username']);
                //Get email from table
                $_SESSION['email'] = get_email($_SESSION['username']);
                //Reset errors back to clear
                $error_msg_username = '';
                $error_msg_password = '';
                include('mainPage.php');
            }
            exit();
            break;

        case 'Register':  // With username, password, email
            //Check if user already in system
            if (username_exists($_POST['username'])) {
                $display_modal_window = 'modal-register';  //It will display the start page with the register box.
                $error_msg_username = '(Username exists)';
                include('startPage.php');
            } 
            //Check if there are 3 valid entries
            else if (!signup_verification($_POST['username'], $_POST['password'], $_POST['email'])) {
                $display_modal_window = 'modal-register';  //It will display the start page with the register box.
                $error_msg_username = '(Information invalid/missing)';
                $error_msg_password = '(Information invalid/missing)';
                $error_msg_email = '(Information invalid/missing)';
                include('startPage.php');
            }
            else {
                //Reset errors back to clear
                $error_msg_username = '';
                $error_msg_password = '';
                signup_a_new_user($_POST['username'], $_POST['password'], $_POST['email']);
                $display_modal_window = 'modal-login';  //It will display the start page with the LogIn box.
                include('startPage.php');
            }
            exit();
            break;

        case 'Get-game':
            if (!check_table_empty()) {
                $display_modal_window = 'modal-game-selector-get-game';  // It will display the start page with the getgame box.
                $error_msg_getgame = '(No games exist in the table)';
                include('startPage.php');
            } 
            //No price entered
            else if (!isset($_POST['price']) || $_POST['price'] == ''){
                $error_msg_getgame = '';
                $get_game = get_game_no_price();
                include('startPage.php');
            }
            //Price entered
            else {
                $error_msg_getgame = '';
                $get_game = get_game_price($_POST['price']);
                include('startPage.php');
            }
            exit();
            break;

        default:
            echo "Unknown command from StartPage<br>";
            exit();
            break;
    }
}

// When commands come from 'MainPage'
else if ($_POST['page'] == 'MainPage')
{
    $command = $_POST['command'];
    switch($command) {  // When a command is sent from the client
        case 'Signout':
            $display_modal_window = 'none';
            include('startPage.php');
            exit();
            break;
        case 'Search-game':
            if (!check_table_empty()) {
                $display_modal_window = 'modal-game-selector-add-game';  // It will display the main page with the addgame box.
                $error_msg_searchgame = '(No games exist in the table)';
                include('mainPage.php');
            } 
            else if (!game_exists($_POST['name'])){
                $display_modal_window = 'modal-game-selector-search-game';  // It will display the main page with the searchgame box.
                $error_msg_searchgame = '(Game not found)';
                include('mainPage.php');
            }
            else {
                $error_msg_searchgame = '';
                $get_game = get_game_name($_POST['name']);
                include('mainPage.php');
            }
            exit();
            break;
        case 'Delete-game':
            if (!check_table_empty()) {
                $display_modal_window = 'modal-game-selector-add-game';  // It will display the main page with the addgame box.
                $error_msg_deletegame = '(No games exist in the table)';
                include('mainPage.php');
            } 
            else if (!game_exists($_POST['name'])){
                $display_modal_window = 'modal-game-selector-delete-game';  // It will display the main page with the deletegame box.
                $error_msg_deletegame = '(Game not found)';
                include('mainPage.php');
            }
            else {
                $error_msg_deletegame = '';
                delete_game($_POST['name']);
                include('mainPage.php');
            }
            exit();
            break;
        case 'Updatedescription-game':
            if (!check_table_empty()) {
                $display_modal_window = 'modal-game-selector-add-game';  // It will display the main page with the addgame box.
                $error_msg_updatedescription = '(No games exist in the table)';
                include('mainPage.php');
            } 
            else if (!game_exists($_POST['name'])){
                $display_modal_window = 'modal-game-selector-update-description-game';  // It will display the main page with the updatedescription box.
                $error_msg_updatedescription = '(Game not found)';
                include('mainPage.php');
            }
            else {
                if (update_desc_game($_POST['name'],$_POST['description'])) {
                    $error_msg_updatedescription = '';
                }
                else {
                    $error_msg_updatedescription = '(Invalid description entry)';
                    $display_modal_window = 'modal-game-selector-update-description-game';  // It will display the main page with the updatedescription box.
                }
                include('mainPage.php');
            }
            exit();
            break;
        case 'Updateprice-game':
            if (!check_table_empty()) {
                $display_modal_window = 'modal-game-selector-add-game';  // It will display the main page with the addgame box.
                $error_msg_updateprice = '(No games exist in the table)';
                include('mainPage.php');
            } 
            else if (!game_exists($_POST['name'])){
                $display_modal_window = 'modal-game-selector-update-price-game';  // It will display the main page with the updateprice box.
                $error_msg_updateprice = '(Game not found)';
                include('mainPage.php');
            }
            else {
                if (update_price_game($_POST['name'],$_POST['price'])) {
                    $error_msg_updateprice = '';
                }
                else {
                    $error_msg_updateprice = '(Invalid price entry)';
                    $display_modal_window = 'modal-game-selector-update-price-game';  // It will display the main page with the updateprice box.
                }
                include('mainPage.php');
            }
            exit();
            break;
        case 'Add-game':
            //Check if game is already in system
            if (gamename_exists($_POST['name'])) {
                $display_modal_window = 'modal-game-selector-add-game';  //It will display the main page with the add game box.
                $error_msg_addgame = '(Game exists)';
                include('mainPage.php');
            } 
            //Check if there are 3 valid entries
            else if (!add_game_verification($_POST['name'], $_POST['price'], $_POST['about'])) {
                echo('add game2');
                $display_modal_window = 'modal-game-selector-add-game';  //It will display the main page with the add game box.
                $error_msg_addgame = '(Information invalid/missing)';
                include('mainPage.php');
            }
            else {
                //Reset errors back to clear
                $error_msg_addgame = '';
                $error_msg_addgame = '';
                add_game($_POST['name'], $_POST['price'], $_POST['about']);
                include('mainPage.php');
            }
            exit();
            break;
        case 'Get-game':
            if (!check_table_empty()) {
                $display_modal_window = 'modal-game-selector-get-game';  // It will display the main page with the getgame box.
                $error_msg_getgame = '(No games exist in the table)';
                include('mainPage.php');
            } 
            //No price entered
            else if (!isset($_POST['price']) || $_POST['price'] == ''){
                $error_msg_getgame = '';
                $get_game = get_game_no_price();
                include('mainPage.php');
            }
            //Price entered
            else {
                $error_msg_getgame = '';
                $get_game = get_game_price($_POST['price']);
                include('mainPage.php');
            }
            exit();
            break;

        case 'Email':
            if(change_email($_POST['email']))
            {
                $error_msg_email = '';
                $_SESSION['email'] = '';
                //Get email from table
                $_SESSION['email'] = get_email($_SESSION['username']);
                $display_modal_window = 'modal-profile';
                include('mainPage.php');
            }
            else 
            {
                $error_msg_email = '(Please make an entry)';
                $display_modal_window = 'modal-profile-email';
                include('mainPage.php');
            }
            exit();
            break;

        case 'Password':
            if(change_password($_POST['password'], $_SESSION['username']))
            {
                $error_msg_password = '';
                $display_modal_window = 'modal-profile';
                include('mainPage.php');
            }
            else 
            {
                $error_msg_password = '(Please make an entry)';
                $display_modal_window = 'modal-profile-password';
                include('mainPage.php');
            }
            exit();
            break;

        case 'Delete':
            if(!delete_login($_POST['delete']))
            {
                $error_msg_delete = '';
                include('startPage.php');
            }
            else 
            {
                $error_msg_delete = '(Please type your username)';
                $display_modal_window = 'modal-profile-delete';
                include('mainPage.php');
            } 
            exit();
            break;
        
        default:
            echo "Unknown command from MainPage<br>";
            exit();
            break;
    }
}

// Wrong
else {
    echo 'Wrong page<br>';
}
?>   