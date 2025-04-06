<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WorkController extends Controller
{
    public function show_works() {
        
        $works = [
            'one', 'two', 'three'
        ];

        return view('works', ['works' => $works]);
    }
}
