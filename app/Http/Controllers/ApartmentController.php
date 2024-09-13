<?php

namespace App\Http\Controllers;

use App\Models\Apartment;
use Illuminate\Http\Request;

class ApartmentController extends Controller
{
    public function index()
    {

        $apartments = Apartment::orderBy('sort')->get();

        return view('pages.apartment.index', compact('apartments'));
    }
}
