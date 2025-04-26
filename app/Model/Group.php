<?php

namespace Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Discipline;

class Group extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'name',
        'speciality'
    ];
    public function getDiscipline(): int
    {
        $discipline = Discipline::where('id', $this->id)->get();
        return $discipline->name;
    }
}