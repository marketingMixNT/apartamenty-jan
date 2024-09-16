<?php

namespace App\Http\Controllers;

use App\Models\Apartment;
use App\Models\Slide;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use PHPUnit\Event\Code\Test;

class HomeController extends Controller
{

    public function __invoke(Request $request)
    {
        $slides = Slide::orderBy('sort')->get();
        $apartments = Apartment::orderBy('sort')->select('title','slug','thumbnail',)->get();
        $testimonials = Testimonial::orderBy('sort')->get();

        return view('pages.home.index', compact('slides', 'apartments','testimonials'));
    }
}
