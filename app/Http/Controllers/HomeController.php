<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
        {
            $randomId1 = rand(26, 30);
            $randomId2 = rand(31, 36);
            $randomId3 = rand(37, 41);
            $randomId4 = rand(42, 46);
            $randomId5 = rand(47, 51);
            $randomId6 = rand(52, 57);
            $job1 = Job::find($randomId1);
            $job2 = Job::find($randomId2);
            $job3 = Job::find($randomId3);
            $job4 = Job::find($randomId4);
            $job5 = Job::find($randomId5);
            $job6 = Job::find($randomId6);

            return view('home', compact('job1', 'randomId1','job2', 'randomId2','job3', 'randomId3','job4', 'randomId4','job5', 'randomId5','job6', 'randomId6',));
        }

        public function show($id)
        {
            $randomId = rand(1,50);
            $job = Job::find($randomId);

            return view('home', compact('job', 'randomId'));
        }
}
