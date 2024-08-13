<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Job {
    public static function all() {
        return $jobs = [
            ['id' => 1, 'title' => 'Director', 'salary' => "R$15.000,00"],
            ['id' => 2,'title' => 'Programmer', 'salary' => "R$25.000,00"],
            ['id' => 3,'title' => 'Soccer Player', 'salary' => "R$150.000,00"],
        ];
    }

    public static function find($id) {
        $job =  Arr::first(static::all(), function($job) use ($id) {
            return $job['id'] == $id;
        });

        if (!$job) {abort(404);}
        return $job;
    }
}
