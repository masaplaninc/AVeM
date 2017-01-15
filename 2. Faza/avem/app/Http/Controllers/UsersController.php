<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Session;

class UsersController extends Controller
{
    public function index()
    { 
        $users = User::all();
       // return $post->content;
       return view('users.index', compact('users'));
    }


    public function destroy($id)
    {
       User::find($id)->delete();
        Session::flash('flash_message', 'Uporabnik je bil uspešno odstranjen!');
        return redirect('users');
    }
}
