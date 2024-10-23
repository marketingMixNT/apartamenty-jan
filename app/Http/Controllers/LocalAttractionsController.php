<?php

namespace App\Http\Controllers;

use App\Models\Home;
use Illuminate\Http\Request;
use App\Models\LocalAttraction;
use App\Models\PageAttractions;

class LocalAttractionsController extends Controller
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

        $attractions = LocalAttraction::orderBy('sort')->get();

        $pageAttraction = PageAttractions::firstOrFail();

        return view('pages.local-attractions.index', compact('attractions','home','pageAttraction'));
    }
}
