<?php

namespace App\Http\Controllers;

use App\Models\Reciepts;
use Illuminate\Http\Request;

class RecController extends Controller
{



    public function detail(Reciepts $rec)
    {
        return view('detail', ['rec' => $rec]);
    }

    public function index(Reciepts $rec)
    {
        $recs = Reciepts::all();
      dump($recs);
        return view('main', ['rec' => $rec, 
        'recs' => Reciepts::all()

    ]);
    }
}
