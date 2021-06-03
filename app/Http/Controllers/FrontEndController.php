<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\category;
use App\Models\forum;

class FrontEndController extends Controller
{
    public function index()
    {
        $categories = category::latest()->get();
        return view('welcome', \compact('categories'));
    }

    public function categoryOverview($id){
        $category = category::find($id);

        return view('client.category-overview', \compact('category'));
    }

    public function forumOverview($id){
        $forum = forum::find($id);

        return view('client.forum-overview', \compact('forum'));
    }
}
