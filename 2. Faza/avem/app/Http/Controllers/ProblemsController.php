<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Problem;
use App\Pcomment;
use App\User;
use Auth;
use Session;
class ProblemsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::find(Auth::user()->id);    
        $problems = Problem::all(); 
        $users = User::all();
       // return $post->content;
       return view('problems.index',compact('problems'), compact('users'),compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
          return view('problems.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $problem = new Problem;
        $problem->user_id = Auth::user()->id;
        $problem->title =$request->title;
        $problem->content = $request->content;
        $problem->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $problem = Problem::whereId($id) -> first();
        $users = User::all();
        $comments = Pcomment::all();
        return view('problems.show',['problem' => $problem, 'comments' => $comments, 'users' => $users]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $problem = Problem::find($id);
        return view('problems/edit',compact('problem'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         $this->validate($request, [
            'title' => 'required',
            'content' => 'required',
        ]); 
        Problem::find($id)->update($request->all());
        return redirect('problems');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       Problem::find($id)->delete();
        Session::flash('flash_message', 'Objava je bila uspešno izbrisana!');
        return redirect('problems');
    }
}
