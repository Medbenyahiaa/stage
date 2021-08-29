<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function Admin()
    {
        $users = user::all();
        return \view('admin.add', [
            'users' => $users
        ]);

    }
    
}
