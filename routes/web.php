<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;


$jobs = [
    [
        'id' => 1,
        'title' => 'Director',
        'Salary' => '$50,000'
    ],
    [
        'id' => 2,
        'title' => 'Programer',
        'Salary' => '$150,000'
    ],
    [
        'id' => 3,
        'title' => 'Teacher',
        'Salary' => '$40,000'
    ],
];
/* main route .. */

Route::get('/', function (){
    
    return view('home');
});
Route::get('/job', function () use ($jobs) {
    return view('jobs',
    [
        'jobs' => $jobs
    ],
);
});


Route::get('/contact', function (){
    return view('contact');
});


Route::get('/job/{id}', function ($id) use ($jobs){
     $job = Arr::first($jobs, fn($job) => $job['id'] == $id);
    if ($job == null) {
        # code...
        return redirect('/job');
    }
    return view('job', [
        'job' => $job,
    ]);
    
});
 