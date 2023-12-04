<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersonalTrainer extends Model
{
    use HasFactory;

    protected $table = 'personal_trainers';
    protected $primaryKey = 'id';
    protected $keyType = 'integer';
    public $incrementing = true;

    protected $fillable = [
        'name',
        'certification',
        'session_cost',
    ];

    public function subscriptions()
    {
        return $this->hasMany(Subscriptions::class, 'personal_trainer_id');
    }

    public function expertises()
    {
        return $this->belongsToMany(Expertise::class, 'trainer_expertise', 'trainer_id', 'expertise_id');
    }
}
