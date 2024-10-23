<?php

namespace App\Http\Controllers;

use App\Models\Home;
use App\Models\Apartment;
use App\Models\PageRooms;
use Illuminate\Http\Request;

class ApartmentController extends Controller
{
    public function index()
    {
        $home = Home::select('logo','phone','phone_second','address','city','booking_link','booking_script','map','map_link','title','mail')
        ->addSelect(['id']) 
        ->with('socials')
        ->firstOrFail();

        $apartments = Apartment::orderBy('sort')->select('title','slug','thumbnail','short_desc','reservation_link','beds','bathroom')->get();

        $rooms = PageRooms::firstOrFail();

    

        return view('pages.apartment.index', compact('apartments','home','rooms'));
    }

    public function show($slug)
    {

        $home = Home::select('logo','phone','phone_second','address','city','booking_link','booking_script','map','map_link','title','mail')
        ->addSelect(['id']) 
        ->with('socials')
        ->firstOrFail();
        
        $locale = app()->getLocale(); 
    

        $apartment = Apartment::where("slug->{$locale}", $slug)->firstOrFail();
    
      
        $otherApartments = Apartment::select('title', 'slug', 'thumbnail', 'beds', 'bathroom')
            ->where('id', '!=', $apartment->id)
            ->orderBy('sort')
            ->take(3)
            ->get();
    
        return view('pages.apartment.show', compact('apartment', 'otherApartments','home'));
    }
    
}
