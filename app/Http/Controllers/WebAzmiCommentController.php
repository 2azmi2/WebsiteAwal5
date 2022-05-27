<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WebAzmiComment;

class WebAzmiCommentController extends Controller
{
    public function advice(){
        return view('comment',[
            "title" => WebAzmiComment::getTitle()
        ]);
    }
}
