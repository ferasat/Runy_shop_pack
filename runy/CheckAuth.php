<?php


use Imanghafoori\HeyMan\Facades\HeyMan;

class CheckAuth
{
    public function __construct()
    {
        HeyMan::whenYouHitRouteName()
            ->youShouldBeLoggedIn()
            ->otherwise()
            ->redirect()->to('login');
    }
}
