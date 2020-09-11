<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

// 可変項目
class Task extends Model
{
    protected $fillable = ['subject', 'due_date', 'completed', 'description', 'priority'];
}
