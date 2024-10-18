<?php

namespace App\Http\Controllers;

use App\Models\Cta;
use App\Models\Home;
use App\Models\Slide;
use App\Models\Features;
use App\Models\Apartment;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use PHPUnit\Event\Code\Test;

class HomeController extends Controller
{

    public function __invoke(Request $request)
    {
        $apartments = Apartment::orderBy('sort')->select('title','slug','thumbnail','beds','bathroom')->get();
        $testimonials = Testimonial::orderBy('sort')->get();

        $features = Features::orderBy('sort')->get();
        $cta = Cta::firstOrFail();
        $home = Home::firstOrFail();


        return view('pages.home.index', compact( 'apartments','testimonials','features','cta','home'));
    }
}
