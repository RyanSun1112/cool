<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::get('/jobs', function () {
    return view('jobs',[
        'jobs' => [[
            'id' => 1,
            'title' => 'Programmer',
            'Salary' => '100000'
        ],
        [
            'id' => 2,
            'title' => 'Teacher',
            'Salary' => '10000'
        ],
        [
            'id' => 3,
            'title' => 'Gardener',
            'Salary' => '120'
        ]
    ]]);
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/jobs/{id}', function ($id) {
    $jobs = [[
        'id' => 1,
        'title' => 'Programmer',
        'Salary' => '100000'
    ],
    [
        'id' => 2,
        'title' => 'Teacher',
        'Salary' => '10000'
    ],
    [
        'id' => 3,
        'title' => 'Gardener',
        'Salary' => '120'
    ]
    ];
    $job = \Illuminate\Support\Arr::first($jobs, fn($job) => $job['id'] ==$id);
    return view('job', ['job' => $job]);
});
