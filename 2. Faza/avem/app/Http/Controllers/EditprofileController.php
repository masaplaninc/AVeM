<?php
namespace App\Http\Controllers;;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Auth;
class EditprofileController extends Controller
{
	
	public function __construct()
    {
       $this->middleware('auth');
    }

    public function editprofile()
    {
    	$user = User::find(Auth::user()->id);    
        return view('urediprofil',["user" => $user]);
    }

    public function saveeditprofile(Request $input){

        $this->validate($input, [
        'name' => 'required|max:255',
        'surname' => 'required|max:255',
        'username' => 'required|max:255',
        'aboutme' => 'max:500',
        'films' => 'max:500',
        'music' => 'max:500',
        'literature' => 'max:255',
        'password' => 'min:6|confirmed'        
            ]);

    	$user = User::find(Auth::user()->id);
    	$user->name = $input["name"];
        $user->surname = $input["surname"];
        $user->username = $input["username"];
        $user->aboutme = $input["aboutme"];
        $user->films = $input["films"];
        $user->music = $input["music"];
        $user->literature = $input["literature"];
        if ($input->has('password')) 
        $user->password = bcrypt($input['password']);
    	$user->save();    	  	

    	return redirect('urediprofil');

    }

}