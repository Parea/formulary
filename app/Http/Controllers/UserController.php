<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Users;


class UserController extends Controller
{
    public function all(){
        $users = Users::all();
        // dump($users);
        return view('users.users',['users' => $users]);
    }

    public function show($usersId){
        $users = Users::find($usersId);
        // dump($users);
        return view('users.user');
    }

    public function new(){
        return view('users.user-form');
    }

    public function create(Request $request){
        $input = $request->all();
        $users = new Users();
        $users ->lastname = $input['lastname'];
        $users ->firstname = $input['firstname'];
        $users ->email = $input['email'];
        $users ->message = $input['message'];
        $users ->password = $input['password'];
        $users ->save();

        return view('users.user-create-confirmation');
    }

    public function destroy(Request $request){
        $input = $request->all();

        $users = new Users();
        $users->delete();
        return view('users.user-delete');
    }
}
