<?php
session_start();

//login function
function login($username, $password) {

    // valid usernames and passwords
    $users = [
        'vamk' => '$2y$10$DxkKUr830tmTmI2rVcah.uWMS9Obf/LFBlzvzyXJaaNnnJ30FO/Qm'
    ];

    if (isset($users[$username])) {
        // The provided username is correct, now validate the password
        $expectedPasswordHash = $users[$username];

        if (password_verify($password, $expectedPasswordHash)) {
            // the provided password is also correct

        // Remember the username of the user who just logged in
        $_SESSION['authenticated_user'] = $username;

        // Redirect to /secret.php
        header('Location: secret.php');
        exit;
    } else {
        // login failed
        return false;
         }
    }
}

// call login if username and password are not empty
if (isset($_POST['username'], $_POST['password'])) {
    if(!login($_POST['username'], $_POST['password'])){
        echo "Login failed, please try again";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Login</title>   
    <style>
body {background-color: #DBCDC6;}
p    {color: #4E3E9D;
font-family: calibri;
text-align: center;
font-size: 150%;}

.button {
  background-color: #1A162F;
  border: none;
  color: #DD99BB;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  margin: 4px 2px;
  cursor: pointer;
}
.button1 {font-size: 12px;}

</style>

    </head>
    <body>
        <form method="post">
            <div>
                <label for="username">
                   <p>Username: 
                </label>
                <input type="text" name="username" id="username">
        </p>
            </div>
            <div>
                <label for="password">
                 <p>Password: 
                </label>
                <input type="password" name="password" id="password">
        </p>
            </div>
            <div>
               <p> <button type="submit" class="button button1">Submit</button>
        </p>
            </div>
        </form>
    </body>
    </html>