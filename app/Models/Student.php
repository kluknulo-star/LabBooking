<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $guarded = false;

    protected $table = 'students';

    public function group()
    {
        return $this->belongsTo(Group::class, 'group_id', 'id');
    }
}
