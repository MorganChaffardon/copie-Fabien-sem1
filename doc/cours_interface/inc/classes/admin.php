<?php

class Admin extends User
{
    public $password;

    public function connect()
    {
        return $this->password === '1234' ? 'connected' : 'error';
    }
}