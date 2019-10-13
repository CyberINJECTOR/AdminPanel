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

    public function updateUser(Request $request) {
        $newUser = Users::find($request->input('id'));
        $newUser->name = $request->input('name');
        $newUser->email = $request->input('email');
        $newUser->email_verified_at = $request->input('email_verified_at');
        $newUser->password = $request->input('password');
        $newUser->profileDescription = $request->input('profileDescription');
        $newUser->created_at = $request->input('created_at');
        $newUser->urlImg = $request->input('urlImg');
        $newUser->city = $request->input('city');
        $newUser->company = $request->input('company');
        $newUser->save();
        return 'UserUpdated';
    }
}
