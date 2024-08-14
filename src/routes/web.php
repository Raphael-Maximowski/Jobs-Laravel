<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;

Route::get('', function () {
    return view('home');
});

Route::get('jobs', function () {
    $jobs =  Job::with('employer')->simplePaginate(6);
    return view('jobs', compact('jobs'));
});

Route::get('jobs/{id}', function ($id) {
    $job = Job::find($id);
    if (!$job) {abort(404);}
    return view('job', ['job' => $job]);
});
