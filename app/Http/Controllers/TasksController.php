<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TasksController extends Controller
{
    //
    public function index()
    {
        $query = DB::select('select * from users');
        return view('users.index', ['users' => $query]);
    }

    public function create()
    {
        //create a new user
        $user = new User();
        $user->name = 'John Doe';
        $user->email = 'john@doe.com';
        $user->password = bcrypt('password');
        $user->save();
        return json_encode($user);


    }
}
