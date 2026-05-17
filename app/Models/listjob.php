<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class listjob extends Model

{
    use HasFactory;
    protected $table ='joblist';
    protected $fillable = [
        
        'title',
        'salary',
        'description',
    ];
}
