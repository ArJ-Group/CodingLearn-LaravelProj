<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\category;
use App\Models\forum;
use App\Models\discussion;

class FrontEndController extends Controller
{
    public function index()
    {
        $categories = category::latest()->get();
        return view('forum', \compact('categories'));
    }
    public function categoryOverview($id){
        $category = category::find($id);

        return view('client.category-overview', \compact('category'));
    }
    public function forumOverview($id){
        $forum = forum::find($id);

        return view('client.forum-overview', \compact('forum'));
    }
    public function discussionOverview($id){
        $discussion = discussion::find($id);
        
        return view('client.discussion', \compact('discussion'));
    }
}    
