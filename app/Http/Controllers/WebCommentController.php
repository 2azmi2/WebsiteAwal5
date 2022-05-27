<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WebAzmiComment;
use App\Models\Comment;

class WebCommentController extends Controller
{
    //
    public function index(){
        return view('comment',[
            "title" => Comment::find(2)->title
        ]);
    }
}
