<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
   protected $fillable = [
        'title',
        'description',
        'completed',
        'start_date',
        'due_date'
    ];
}
