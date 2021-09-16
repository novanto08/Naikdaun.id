<?php

namespace App\Http\Controllers;

use App\Models\Work;

class WorkController extends Controller
{
    /**
     * Method untuk menampilkan halaman work
     */
    public function index()
    {
        $works = Work::get();
        return view('pages.works.index', [
            "works" => $works->all()
        ]);
    }

    /**
     * Method untuk menampilkan halaman detail work
     */
    public function detail($slug)
    {
        $work = Work::findOrFail($slug);

        $works = Work::get();

        $next = $works->first(function ($value) use ($work) {
            return $value['id'] > $work['id'];
        });

        $previous = $works->last(function ($value) use ($work) {
            return $value['id'] < $work['id'];
        });

        return view('pages.works.detail', compact('work', 'next', 'previous'));
    }
}
