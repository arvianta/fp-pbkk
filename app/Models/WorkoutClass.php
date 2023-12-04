<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkoutClass extends Model
{
    use HasFactory;

    protected $table = 'workout_classes';
    protected $primaryKey = 'id';
    protected $keyType = 'integer';
    public $incrementing = true;

    protected $fillable = [
        'name',
        'description',
        'day',
        'time',
        'duration',
        'capacity',
        'instructor_id',
    ];

    public function attendees()
    {
        return $this->belongsToMany(User::class, 'user_workout_class', 'workout_class_id', 'user_id');
    }
}
