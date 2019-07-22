<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Users;

class UserController extends Controller
{
    //
    public function getAll() {
        $users = Users::all();
        return $users;
    }

    public function getUserById($id) {
        $user = Users::find($id);
        return $user;
    }

    public function addUser(Request $request) {
        $newUser = Users::create($request->all());
        return $newUser;
    }
}
