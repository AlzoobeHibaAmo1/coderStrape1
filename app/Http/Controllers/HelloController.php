<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function about(){

        return view('about');
    }

    public function services(){
        $services = [
            'service 1',
            'service 2',
            'service 3',
            'service 4'
        ];

        return view('services', compact('services'));
    }
}
