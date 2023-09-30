<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $title = 'مدیریت کاربران';
        $description = 'مدیریت کاربران';
        return view('users.indexUsers' , compact('title' , 'description'));
    }

    public function create()
    {
        $user = new User();
        $user->name = ' ';
        $user->email = rand(1,99).'@test.com';
        $user->password = bcrypt('@dmiN98A' );
        $user->save();
        $title = 'ویرایش کاربران';
        $description = 'ویرایش کاربران';
        return view('users.newUser' , compact('title' , 'description' , 'user'));
    }
}
