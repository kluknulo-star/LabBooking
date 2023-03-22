<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stream extends Model
{
    use HasFactory;

    protected $guarded = false;

    protected $table = 'streams';

    public function students() {
        return $this->hasMany(Student::class);
    }

    public function disciplins() {
        return $this->hasMany(Discipline::class);
    }

}
