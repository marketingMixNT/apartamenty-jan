<?php

namespace App\Http\Controllers;

use App\Models\Home;
use App\Models\OtherObject;
use Illuminate\Http\Request;
use App\Models\PageOtherObjects;

class OtherApartmentsController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $home = Home::select('logo', 'phone', 'phone_second', 'address', 'city', 'booking_link', 'booking_script', 'map', 'map_link', 'title', 'mail')
            ->addSelect(['id'])
            ->with('socials')
            ->firstOrFail();

            $pageOtherObjects = PageOtherObjects::firstOrFail();

            $otherObjects = OtherObject::orderBy('sort')->get();

        return view('pages.other-apartments.index',compact('home','pageOtherObjects','otherObjects'));
    }
}
