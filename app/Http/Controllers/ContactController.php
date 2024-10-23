<?php

namespace App\Http\Controllers;

use App\Models\Home;
use App\Models\PageContact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {

        $home = Home::select('logo','phone','phone_second','address','city','booking_link','booking_script','map','map_link','title','mail','bank','bank_account')
        ->addSelect(['id']) 
        ->with('socials')
        ->firstOrFail();

        $pageContact = PageContact::firstOrFail();

        return view('pages.contact.index',compact('home','pageContact'));
    }
}
