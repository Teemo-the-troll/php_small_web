<?php
declare(strict_types = 1);
class User
{
    public $username;
    public $password;

    function __construct(array $data)
    {
        $this->username = $data['username'];
        $this->password = password_hash($data['password'], PASSWORD_BCRYPT);
    }

    function verify($username, $password)
    {
        $usrArray = json_decode(file_get_contents("users.txt"), true);
        return password_verify($password, $usrArray[$username]);
    }
}
