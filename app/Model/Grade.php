<?php

namespace Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'student',
        'discipline',
        'grade',
        'hours',
        'control',
        'semester'
    ];
}