<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SampleController extends Controller
{
    public function sampleView()
    {
        $text = "テキスト";
        dd($text);
        return view('sample');
    }
}
