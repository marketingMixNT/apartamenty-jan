<?php

namespace App\Http\Controllers;

use App\Models\Slide;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    
    public function __invoke(Request $request)
    {
$slides = Slide::orderBy('sort')->get();

        return view('pages.home.index', ['slides' => $slides]);
    }
}
