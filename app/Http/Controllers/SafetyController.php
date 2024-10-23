<?php

namespace App\Http\Controllers;

use App\Models\Home;
use App\Models\PageSafety;
use App\Models\Safety;
use Illuminate\Http\Request;

class SafetyController extends Controller
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

        $pictograms = Safety::orderBy('sort')->get();

        $pageSafety = PageSafety::firstOrFail();

        return view('pages.safety.index', compact('pageSafety','home','pictograms'));

       
    }
}
