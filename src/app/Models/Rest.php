<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rest extends Model
{
    use HasFactory;
    
    protected $guarded = [
        'id',
        'name',
        'work_id',
        'break_start',
        'break_end'
    ];
}
