<?php

namespace App\Http\Controllers;

use App\Models\Apartment;
use Illuminate\Http\Request;

class ApartmentController extends Controller
{
    public function index()
    {

        $apartments = Apartment::orderBy('sort')->select('title','slug','thumbnail','short_desc','reservation_link','beds','bathroom')->get();

        return view('pages.apartment.index', compact('apartments'));
    }

    public function show($slug)
    {

        $apartment = Apartment::where('slug->pl', $slug)->firstOrFail();

        $otherApartments = Apartment::select('title','slug','thumbnail','beds','bathroom')
        ->where('id', '!=', $apartment->id)
        ->orderBy('sort')
        ->take(3) 
        ->get();

        return view('pages.apartment.show',compact('apartment','otherApartments'));
    }
}
