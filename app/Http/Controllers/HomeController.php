<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
{
    $jobs = Job::paginate(10);
    return view('home', compact('jobs'));
}
}
