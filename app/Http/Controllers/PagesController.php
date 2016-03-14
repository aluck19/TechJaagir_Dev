<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    public function about(){
        $name = 'Abhishek <span style="color: red;">Gupta</span>';
//
//        return view('pages.about')->with([
//            'first' => 'Abhishek',
//            'last' => 'Gupta'
//
//        ]);


//        $data= [];
//        $data['first'] = 'Abhishek';
//        $data['last'] = 'Gupta';

//        $first = 'Fox';
//        $last = 'Mulder';

//        return view('pages.about', compact('first', 'last'));

        $people = [
            'Taylor Otwell', 'Sanjeev Budha', 'Ashish Lamicahne'
        ];

    //    $people = [];

        return view('pages.about', compact('people'));
    }

    public function contact(){
        return view('pages.contact');
    }
}
