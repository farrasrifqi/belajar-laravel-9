<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;  
    
    public function class()
    {
        return $this->belongsTo(ClassRoom::class);
    }
    
    public function ekskuls()
    {
        return $this->belongsToMany(Ekskul::class, 'student_ekskul', 'student_id', 'ekskul_id');
    }
}