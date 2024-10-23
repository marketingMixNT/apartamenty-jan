<?php

namespace App\Http\Controllers;

use App\Models\Home;
use App\Models\Regulations;
use Illuminate\Http\Request;
use App\Models\PrivacyPolicy;

class OtherPagesController extends Controller
{
    public function privacyPolicy()
    {
        $home = Home::select('logo','phone','phone_second','address','city','booking_link','booking_script','map','map_link','title','mail')
        ->addSelect(['id']) 
        ->with('socials')
        ->firstOrFail();

        $privacyPolicy = PrivacyPolicy::firstOrFail();

        return view('pages.other.privacy-policy', compact('privacyPolicy','home'));
    }
    public function regulations()
    {

        $home = Home::select('logo','phone','phone_second','address','city','booking_link','booking_script','map','map_link','title','mail')
        ->addSelect(['id']) 
        ->with('socials')
        ->firstOrFail();

        $regulations = Regulations::firstOrFail();

        return view('pages.other.regulations', compact('regulations','home'));
    }
}
