<?php

namespace App\Http\Controllers;

use App\Models\Home;
use App\Models\PageTravels;
use Illuminate\Http\Request;

class TransfersController extends Controller
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

        $pageTravels = PageTravels::firstOrFail();

        return view('pages.transfers.index',compact('home','pageTravels'));
    }
}
