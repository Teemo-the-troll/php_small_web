<?php
include_once 'User.php';
function saveUser($password, $username)
{
    $person = new User(array('username' => $username, 'password' => $password));
    if (unserialize(file_get_contents("users.txt")) === false) {
        $users = fopen("users.txt", "w") or die("unable to write/create file");
        fwrite($users, serialize(array($person)));
        echo "nothing was there";
    } else {
        $usrArray = unserialize(file_get_contents("users.txt"));
        $users = fopen("users.txt", "w") or die("unable to write/create file");
        $usr = array($person);
        fwrite($users, serialize(array_merge($usrArray, $usr)));
    }
    fclose($users);
}

function loginUser($username, $password)
{
    $usrArray = unserialize(file_get_contents("users.txt"));
    settype($usrArray, 'array');
    if ($usrArray !== false) {
        for ($i = 0; $i < count($usrArray); $i++) {
            $user = $usrArray[$i];
            if ($user->username === $username) {
                if (password_verify($password, $user->password)) {
                    $_SESSION["is_logged"] = true;
                    $_SESSION["userlogged"] = $username;
                    header("Location: /lorem");
                    die();
                } else echo "wrong username or password, try again";
            }
        } echo "wrong  or password, try again";
    } else echo "no users are in the database yet, please register at least one user";
}
