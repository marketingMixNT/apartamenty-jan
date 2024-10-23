<?php

namespace App\Http\Controllers;

use App\Models\Home;
use App\Models\Gallery;
use App\Models\PageGallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
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

        $images = Gallery::orderBy('sort')->get();

        $pageGallery = PageGallery::firstOrFail();

        return view('pages.gallery.index', compact('images','home','pageGallery'));
    }
}
