<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/jobs', function () {
    return view('jobs', [
        'jobs'=>[
            [
                'title'=>'PHP Developer',
                'description'=>'This is an awesome job',
                'location'=>'Remote'
            ],
            [
                'title'=>'Python Developer',
                'description'=>'This is an awesome job',
                'location'=>'Remote'
            ],
            [
                'title'=>'Ruby Developer',
                'description'=>'This is an awesome job',
                'location'=>'Remote'
            ]
        ]
    ]);
});
Route::get('/contact', function () {
    return view('contact');
});

