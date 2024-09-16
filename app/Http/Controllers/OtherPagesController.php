<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OtherPagesController extends Controller
{
    public function privacyPolicy () {
        return 'pages.other.privacy-policy';
    }
    public function regulations () {
        return 'pages.other.regulations';
    }
}
