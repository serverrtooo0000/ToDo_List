<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    public function getId()
    {
        return Task::find($this->id);
    }

    protected $fillable = 
    [
        'title',
        'description',
        'image_path'
    ];
}
