<?php

namespace App\Http\Controllers;

use App\Models\Work;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $works = Work::get()->filter(function ($value, $key) {
            return $key < 3;
        });

        return view('pages.home.index', compact("works"));
    }
}
