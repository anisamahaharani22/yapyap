<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class YapyapController extends Controller
{
    
public function index()
{
    $yapyaps = [
        [
            'author' => 'Anisa PM',
            'message' => 'Just deployed my first Laravel app! 🚀',
            'time' => '5 minutes ago'
        ],
        [
            'author' => 'Putri AM',
            'message' => 'Laravel makes web development fun again!',
            'time' => '1 hour ago'
        ],
        [
            'author' => 'Maharani AP',
            'message' => 'Working on something cool with Chirper...',
            'time' => '3 hours ago'
        ]
    ];

    return view('home', ['yapyaps' => $yapyaps]);
}
}
