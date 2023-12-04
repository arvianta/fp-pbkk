<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Instructor extends Model
{
    use HasFactory;

    protected $table = 'instructors';
    protected $primaryKey = 'id';
    protected $keyType = 'integer';
    public $incrementing = true;

    protected $fillable = [
        'name',
    ];

    public function expertises()
    {
        return $this->belongsToMany(Expertise::class, 'instructor_expertise', 'instructor_id', 'expertise_id');
    }
}
