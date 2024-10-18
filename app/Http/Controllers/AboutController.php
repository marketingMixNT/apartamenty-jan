<?php

namespace App\Http\Controllers;

use App\Models\Home;
use App\Models\PageAbout;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {

        $home = Home::select('logo','phone','phone_second','address','city','booking_link','booking_script','map','map_link','title','mail')
        ->addSelect(['id']) 
        ->with('socials')
        ->firstOrFail();

        $about = PageAbout::with("pageAboutBlocks")->firstOrFail();

        return view('pages.about.index',compact('home','about'));
    }
}
