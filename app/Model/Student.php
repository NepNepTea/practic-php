<?php

namespace Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'last_name',
        'first_name',
        'patronym',
        'gender',
        'birth_date',
        'address',
        'created_by',
        'group'
    ];
}