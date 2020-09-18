<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

// 可変項目
class Task extends Model
{
    protected $fillable = ['subject', 'due_date', 'completed', 'description', 'priority'];

    use Sortable;
    public $sortable = ['id', 'due_date', 'priority', 'completed'];
}
