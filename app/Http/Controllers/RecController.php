<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Reciepts;
use Illuminate\Http\Request;

class RecController extends Controller
{

    

    public function detail(Reciepts $rec)
    {
        return view('detail', ['rec' => $rec]);
    }

    public function index(Reciepts $rec, Comment $com)
    {
       
        
        return view('main', ['rec' => $rec, 
        'recs' => Reciepts::paginate(10),
        'com' => $com, 
        'coms' => Comment::latest()->get(),
    ]);
    }
}
