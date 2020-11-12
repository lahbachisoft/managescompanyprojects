<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    public function step()
    {
        return $this->belongsTo(Step::class, 'step_id', 'id');
    }
}
