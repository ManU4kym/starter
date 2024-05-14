<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;
/* main route .. */

Route::get('/', function (){
    
    return view('home');
});
Route::get('/job', function () {
    return view('jobs',
    [
        'jobs' => [
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
        ]
          ],
);
});


Route::get('/contact', function (){
    return view('contact');
});


Route::get('/job/{id}', function ($id){
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
     $job = Arr::first($jobs, fn($job) => $job['id'] == $id);
    if ($job == null) {
        # code...
        return redirect('/job');
    }
    return view('job', [
        'job' => $job,
    ]);
    
});
 