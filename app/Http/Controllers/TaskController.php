<?php

namespace App\Http\Controllers;

use App\Task;

class TaskController extends Controller
{
    public function index()
    {
        return Task::all();
    }
}
