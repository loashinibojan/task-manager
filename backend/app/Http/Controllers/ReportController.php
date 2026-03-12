<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
 use App\Models\Task;

class ReportController extends Controller
{
   

public function stats()
{
    return response()->json([
        'total_tasks' => Task::count(),
        'completed_tasks' => Task::where('completed',1)->count(),
        'pending_tasks' => Task::where('completed',0)->count(),
    ]);
}
}
