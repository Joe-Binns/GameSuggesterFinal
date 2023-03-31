<?php
/*
*   User management
*/
$conn = mysqli_connect('localhost','w3jbinns','w3jbinns136','C354_w3jbinns');
$digits = '/[0-9,.]/';

//Add user to the login database
function signup_a_new_user($username, $password, $email) {
    if (username_exists($username)) {
        return false;
    }
    else {
        global $conn;
        $sql = "INSERT INTO Gamesuggester_login VALUES (NULL,'$username','$password','$email')";
        $result = mysqli_query($conn, $sql);
        return $result;
    }
}

//Add game to the games database
function add_game($name, $price, $about) {
    if (gamename_exists($name)) {
        return false;
    }
    else {
        global $conn;
        $sql = "INSERT INTO Gamesuggester_games VALUES (NULL,'$name','$price','$about')";
        $result = mysqli_query($conn, $sql);
        return $result;
    }
}

//EMail update
function change_email($email) {
    $regEmail = '/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,5}$/';
    if ($email == '') {
        return false;
    }
    else if (!preg_match($regEmail, $email)) {
        return false;
    }
    else if (email_exists($email)){
        return false;
    }
    else {
        global $conn;
        $username = $_SESSION['username'];
        $sql = "UPDATE Gamesuggester_login SET Email='$email' WHERE  Username='$username'";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            return true;
        }
        else {   
            return false;
        }
    }
}
//Password update
function change_password($pass, $username) {
    $regPass = "/^(?=.*?[A-Za-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{6,}$/";
    if ($pass == '') {
        return false;
    }
    else if (!preg_match($regPass, $pass)) {
        return false;
    }
    else {
        global $conn;
        $username = $_SESSION['username'];
        $sql = "UPDATE Gamesuggester_login SET Password='$pass' WHERE  Username='$username'";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            return true;
        }
        else {   
            return false;
        }
    }
}

function delete_login($user) {
    if ($user == '') {
        return false;
    }
    else {
        global $conn;
        $sql = "DELETE FROM Gamesuggester_login WHERE Username = '$user'";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            return true;
        }
        else {   
            return false;
        }
    }
}
//check if email is already in system
function email_exists($email) {
    global $conn;
    $sql = "SELECT * FROM Gamesuggester_login WHERE Email = '$email'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        return true;
    }
    else {   
        return false;
    }
}

//signup verification 3 values sent
function signup_verification ($username, $password, $email){
    $regPass = "/^(?=.*?[A-Za-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{6,}$/";
    $regEmail = '/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,5}$/';
    if ($username == '' || $password == '' || $email == '') {
        return false;
    }
    else if (!preg_match($regPass,$password)) {
        return false;
    }
    else if (!preg_match($regEmail, $email)) {
        return false;
    }
    else {
        return true;
    }
}

//signup verification 3 values sent
function add_game_verification ($name, $password, $about){
    if ($name == '' || $password == '' || $about == '') {
        return false;
    }
    else {
        return true;
    }
}

//Get a game (No Price)
function get_game_no_price(){
    global $conn;
    $sql = "SELECT * FROM Gamesuggester_games ORDER BY RAND() LIMIT 1";
    $result = mysqli_query($conn, $sql);
    $arr = [];
    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            $arr['ID'] = $row["ID"];
            $arr['Name'] = $row["Name"];
            $arr['Price'] = $row["Price"];
            $arr['Description'] = $row["Description"];
        }
    }
    return $arr;

}

//Get a game (With Price)
function get_game_price($price){
    global $conn;
    if ($price == 0) {
        $price = 1000;
    }
    $sql = "SELECT * FROM Gamesuggester_games WHERE Price <= '$price' ORDER BY RAND() LIMIT 1";
    $result = mysqli_query($conn, $sql);
    $arr = [];
    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            $arr['ID'] = $row["ID"];
            $arr['Name'] = $row["Name"];
            $arr['Price'] = $row["Price"];
            $arr['Description'] = $row["Description"];
        }
    }
    return $arr;
}

//get a game (With name)
function get_game_name($name){
    global $conn;
    $sql = "SELECT * FROM Gamesuggester_games WHERE Name = '$name'";
    $result = mysqli_query($conn, $sql);
    $arr = [];
    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            $arr['ID'] = $row["ID"];
            $arr['Name'] = $row["Name"];
            $arr['Price'] = $row["Price"];
            $arr['Description'] = $row["Description"];
        }
    }
    return $arr;
}

//Delete game from table
function delete_game($name){
    if ($name == '') {
        return false;
    }
    else {
        global $conn;
        $sql = "DELETE FROM Gamesuggester_games WHERE Name = '$name'";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            return true;
        }
        else {   
            return false;
        }
    }
}
//Update price of game from table
function update_price_game($name, $price){
    global $conn, $digits;
    if ($name == ''||$price == '') {
        return false;
    }
    else if (!preg_match($digits, $price)) {
        return false;
    }
    else {
        $sql = "UPDATE Gamesuggester_games SET Price = '$price' WHERE Name = '$name'";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            return true;
        }
        else {   
            return false;
        }
    }
}
//Update description of game from table
function update_desc_game($name, $desc){
    global $conn;
    $reg = '/^[a-zA-Z0-9.,!@#$%^&*)(_%+-]{1,150}$/';
    if ($name == ''||$desc == '') {
        return false;
    }
    else if (preg_match($reg, $desc)) {
        return false;
    }
    else {
        $sql = "UPDATE Gamesuggester_games SET Description = '$desc' WHERE Name = '$name'";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            return true;
        }
        else {   
            return false;
        }
    }
}
//Get email and return it
function get_email($user){
    global $conn;
    $sql = "SELECT * FROM Gamesuggester_login WHERE Username = '$user'";
    $result = mysqli_query($conn, $sql);
    $fin = 'gaga';
    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
            $fin = $row["Email"];
        }
    }
    return $fin;
}
//check if game is already in system
function game_exists($name) {
    global $conn;
    $sql = "SELECT * FROM Gamesuggester_games WHERE Name = '$name'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        return true;
    }
    else {   
        return false;
    }
}
//Check if Games table is empty
function check_table_empty(){
    global $conn;
    $sql = "SELECT COUNT(*) FROM Gamesuggester_games";
    $result = mysqli_query($conn, $sql);
    return $result;
}

//Check if game already exists in system
function gamename_exists($name) {
    global $conn;
    $sql = "SELECT * FROM Gamesuggester_games WHERE Name = '$name'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        return true;
    }
    else {   
        return false;
    }
}

//Check is username is already in system
function username_exists($username) {
    global $conn;
    $sql = "SELECT * FROM Gamesuggester_login WHERE Username = '$username'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        return true;
    }
    else {   
        return false;
    }
}

function username_password_valid($username, $password) {
    global $conn;
    $sql = "SELECT * FROM Gamesuggester_login WHERE (Username = '$username' AND Password = '$password')";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        return true;
    }
    else {
        return false;
    }
}

?>   