<?php

namespace App\Http\Controllers;

use App\Models\Person;
use App\Models\User;
use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class UserController extends Controller
{
    public function index() {
    return view('User.addUser');
    }

    public function userStore(Request $request){

    $user= new Person();
    $user->username= $request->input('username');
    $user->follow= $request->input('follow');
    $user->post= $request->input('post');
    $user->tag= $request->input('tag');

    $user->save();

    return redirect()->action([DrawController::class, 'index']);
    }
}
