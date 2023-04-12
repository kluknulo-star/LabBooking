<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    use HasFactory;

    protected $guarded = false;

    protected $table = 'groups';

    public function students() {
        return $this->hasMany(Student::class);
    }

    public function disciplins() {
        return $this->hasMany(Discipline::class);
    }

}
