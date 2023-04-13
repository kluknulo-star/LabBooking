<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Record extends Model
{
    use HasFactory;

    public function lab()
    {
        return $this->belongsTo(Lab::class, 'lab_id', 'id');
    }

    public function cabinet()
    {
        return $this->belongsTo(Cabinet::class, 'cabinet_id', 'id');
    }
}
