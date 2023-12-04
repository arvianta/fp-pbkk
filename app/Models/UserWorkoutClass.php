<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserWorkoutClass extends Model
{
    use HasFactory;

    protected $table = 'user_workout_class';
    protected $primaryKey = 'id';
    protected $keyType = 'integer';
    public $incrementing = true;

    protected $fillable = [
        'user_id',
        'workout_class_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function workoutClass()
    {
        return $this->belongsTo(WorkoutClass::class, 'workout_class_id');
    }
}
