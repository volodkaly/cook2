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
}
