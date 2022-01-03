<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public create index(User $user)
    {
        Task::find()->all();
        return view('users.index')
    }
}
