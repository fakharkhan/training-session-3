<?php

namespace App;

class UserRepository
{
    public $user;

    public function __construct(User $user)
    {
       $this->user=$user;
    }


    public function sum($a,$b)
    {
        return $a+$b;
    }

}