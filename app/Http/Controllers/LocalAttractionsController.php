<?php

namespace App\Http\Controllers;

use App\Models\LocalAttraction;
use Illuminate\Http\Request;

class LocalAttractionsController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $attractions = LocalAttraction::orderBy('sort')->get();

        return view('pages.local-attractions.index', compact('attractions'));
    }
}
