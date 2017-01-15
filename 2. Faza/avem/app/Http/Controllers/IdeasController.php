<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Idea;
use App\Icomment;
use App\User;
use Auth;
use Session;
class IdeasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $upo = User::find(Auth::user()->id);    
        $ideas = Idea::all(); 
        $users = User::all();
       // return $Idea->content;
       return view('ideas.index',['ideas' => $ideas, 'upo' => $upo, 'users' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
          return view('ideas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ideas = new Idea;
        $ideas->user_id = Auth::user()->id;
        $ideas->title =$request->title;
        $ideas->content = $request->content;
        $ideas->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $idea = Idea::whereId($id) -> first();
        $users = User::all();
        $comments = Icomment::all();
        return view('ideas.show',['idea' => $idea, 'comments' => $comments, 'users' => $users]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $idea = Idea::find($id);
        return view('ideas/edit',compact('idea'));
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
        Idea::find($id)->update($request->all());
        return redirect('ideas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       Idea::find($id)->delete();
        Session::flash('flash_message', 'Objava je bila uspešno izbrisana!');
        return redirect('ideas');
    }
}
