<?php
include_once 'User.php';
class UserManager
{
    function saveUser($user)
    {
        $fileContents = unserialize(file_get_contents("users.txt"));
        if ($fileContents === false) {
            $users = fopen("users.txt", "w") or die("unable to write/create file");
            fwrite($users, serialize(array($user)));
            echo "nothing was there";
        } else {
            $users = fopen("users.txt", "w") or die("unable to write/create file");
            fwrite($users, serialize(array_merge($fileContents,array($user))));
        }
        fclose($users);
    }

    function loginUser($username, $password)
    {
        $fileContents = unserialize(file_get_contents("users.txt"));
        settype($fileContents, 'array');
        if ($fileContents !== false) {
            for ($i = 0; $i < count($fileContents); $i++) {
                $user = $fileContents[$i];
                if ($user->username === $username) {
                    if (password_verify($password, $user->password)) {
                        $_SESSION["is_logged"] = true;
                        $_SESSION["userlogged"] = $username;
                        header("Location: /lorem");
                        die();
                    } else echo "wrong username or password, try again";
                }
            }
            echo "wrong  or password, try again";
        } else echo "no users are in the database yet, please register at least one user";
    }
}
