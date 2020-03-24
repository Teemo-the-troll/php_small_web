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
}
