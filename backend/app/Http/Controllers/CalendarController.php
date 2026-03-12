<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class CalendarController extends Controller
{
    public function events()
    {
    $tasks = Task::select(
    'id',
    'title',
    'start_date as start',
    'due_date as end'
    )->get();

    return response()->json($tasks);
    }
}
