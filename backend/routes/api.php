<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\CalendarController;
use App\Models\Task;

Route::get('/dashboard', function () {

    $total = Task::count();
    $completed = Task::where('completed',1)->count();
    $pending = Task::where('completed',0)->count();

    return [
        'total' => $total,
        'completed' => $completed,
        'pending' => $pending
    ];
});

Route::get('/notifications', function () {
    return [
        "message" => "3 tasks pending today"
    ];
});

Route::get('/tasks', [TaskController::class, 'index']);
Route::post('/tasks', [TaskController::class, 'store']);
Route::delete('/tasks/{id}',[TaskController::class,'destroy']);
Route::put('/tasks/{id}', [TaskController::class,'update']);

Route::get('/users',[UserController::class,'index']);
Route::post('/users',[UserController::class,'store']);
Route::put('/users/{id}',[UserController::class,'update']);
Route::delete('/users/{id}',[UserController::class,'destroy']);

Route::get('/reports/stats',[ReportController::class,'stats']);

Route::get('/settings',[SettingController::class,'index']);
Route::post('/settings',[SettingController::class,'update']);

Route::get('/calendar/events', [CalendarController::class,'events']);



