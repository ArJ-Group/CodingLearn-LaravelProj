<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\category;
use App\Models\forum;

class ForumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $forums = forum::latest()->paginate(10);
        return view('admin.pages.forums', compact('forums'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $forums = forum::latest()->paginate(10);
        $categories = category::latest()->get();
        return view('client.new-forum', \compact('forums','categories'));
        return view('client.new-forum', compact('categories'));    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $forums = new forum;
        $forums->title = $request->title;
        $forums->desc = $request->desc;
        $forums->category_id = $request->category_id;
        $forums->user_id = auth()->id();
        $forums->discussion = 0;
        Session::flash('message','Forum created');
        Session::flash('alert-class', 'alert-success');
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $forum = forum::find($id);
        $categories = category::latest()->get();
        return view('admin.pages.edit_forum', \compact('forum','categories'));
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
        $forum=forum::find($id);
        $forum->update($request->all());
        Session::flash('message','Forum updaed');
        Session::flash('alert-class', 'alert-success');
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $forum = forum::find($id);
        $forum->delete();
        Session::flash('message','Forum Deleted');
        Session::flash('alert-class', 'alert-success');
        return back();
    }
}
