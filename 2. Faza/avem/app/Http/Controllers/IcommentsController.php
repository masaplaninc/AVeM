<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Icomment;
use App\Idea;
use Auth;
use Session;
class IcommentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $id = $request->data;
        $ideas=Idea::whereUser_id($id)->first();

        $comment = new Icomment;
        $comment->user_id = Auth::user()->id;
        $comment->idea_id =$id;
        $comment->content = $request->content;
        $comment->save();

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $comments = Icomment::all();
        return view('comments.show', compact('comments'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $comment = Icomment::find($id);
        return view('icomments/edit',compact('comment'));
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
            'content' => 'required',
        ]); 
        Icomment::find($id)->update($request->all());
        $comment = Icomment::find($id);
        $x = $comment->id;
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
        Icomment::find($id)->delete();
        Session::flash('flash_message', 'Komentar je bil uspešno izbrisan!');
        return redirect('ideas');
    }
}
