<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Auth;
use Image;

class ProfileController extends Controller
{
   /* public function profile($username){
    	$user = User::whereUsername ($username) -> first();
    	return view('profile', compact('user'));
    	//return view('profile', array('user' => Auth::user));
    }*/

    public function profil(){
        return view('profil', array('user' => Auth::user()) );
    }


    public function urediprofil(){
        return view('uredisliko', array('user' => Auth::user()) );
    }

    public function update_avatar(Request $request){
        // Handle the user upload of avatar
        if($request->hasFile('avatar')){
            $avatar = $request->file('avatar');
            $filename = time() . '.' . $avatar->getClientOriginalExtension();
            Image::make($avatar)->resize(300, 300)->save( public_path('/slike/' . $filename ) );
            $user = Auth::user();
            $user->avatar = $filename;
            $user->save();
        }
        return view('uredisliko', array('user' => Auth::user()) );
    }

    
}
