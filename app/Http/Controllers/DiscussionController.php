<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\forum;
use App\Models\discussion;
use App\Models\discussion_reply;

class DiscussionController extends Controller
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
    public function create($id)
    {
        $forums = forum::latest()->get();
        $forum = forum::find($id);

        return \view('client.new-discussion', compact('forums', 'forum'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $notify = "";

        if($request->notify && $request->notify == "on"){
            $notify = 1;
        }

        $discussion = new discussion;
        $discussion->title = $request->title;
        $discussion->desc = $request->desc;
        $discussion->forum_id = $request->forum_id;
        $discussion->user_id = auth()->id();
        $discussion->notify = $notify;

        $discussion->save();
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
        $discussion = discussion::find($id);
        if($discussion){
            $discussion->increment('views', 1);
        }
        return view('client.discussion', \compact('discussion'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * save reply to the database.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function reply(Request $request, $id)
    {
        $reply = new discussion_reply;
        $reply->desc = $request->desc;
        $reply->user_id = auth()->id();
        $reply->discussion_id = $id;
        $reply->save();
        return back();
        
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $replies = discussion_reply::find($id);
        $replies->delete();
        Session::flash('message','Forum Deleted');
        Session::flash('alert-class', 'alert-success');
        return back();
    }
}
