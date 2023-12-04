<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Expertise extends Model
{
    use HasFactory;

    protected $table = 'expertises';
    protected $primaryKey = 'id';
    protected $keyType = 'integer';
    public $incrementing = true;

    protected $fillable = [
        'name',
    ];

    public function trainers()
    {
        return $this->belongsToMany(PersonalTrainer::class, 'trainer_expertise', 'expertise_id', 'trainer_id');
    }

    public function instructors()
    {
        return $this->belongsToMany(Instructor::class, 'instructor_expertise', 'expertise_id', 'instructor_id');
    }
}
