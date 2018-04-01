<?php

namespace Akuriatadev\Wordit\Controllers;

use App\User;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function index ()
    {
        $users = User::all();
        return view('wordit::user.index', compact('users'));
    }
}