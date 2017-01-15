<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pcomment;
use App\Problem;
use Auth;
use Session;
class PcommentsController extends Controller
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
        $post=Problem::whereUser_id($id)->first();

        $comment = new Pcomment;
        $comment->user_id = Auth::user()->id;
        $comment->problem_id =$id;
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
        $comments = Pcomment::all();
        return view('pcomments.show', compact('comments'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $comment = Pcomment::find($id);
        return view('pcomments/edit',compact('comment'));
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
        Pcomment::find($id)->update($request->all());
        $comment = Pcomment::find($id);
        $x = $comment->id;
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
        Pcomment::find($id)->delete();
        Session::flash('flash_message', 'Komentar je bil uspešno izbrisan!');
        return redirect('problems');
    }
}
