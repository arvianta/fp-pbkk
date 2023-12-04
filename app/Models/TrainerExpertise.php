<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrainerExpertise extends Model
{
    use HasFactory;

    protected $table = 'trainer_expertise';
    protected $primaryKey = 'id';
    protected $keyType = 'integer';
    public $incrementing = true;

    protected $fillable = [
        'trainer_id',
        'expertise_id',
    ];

    public function trainer()
    {
        return $this->belongsTo(PersonalTrainer::class, 'trainer_id');
    }

    public function expertise()
    {
        return $this->belongsTo(Expertise::class, 'expertise_id');
    }
}
