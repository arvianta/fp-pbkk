<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InstructorExpertise extends Model
{
    use HasFactory;

    protected $table = 'instructor_expertise';
    protected $primaryKey = 'id';
    protected $keyType = 'integer';
    public $incrementing = true;

    protected $fillable = [
        'instructor_id',
        'expertise_id',
    ];

    public function instructor()
    {
        return $this->belongsTo(Instructor::class, 'instructor_id');
    }

    public function expertise()
    {
        return $this->belongsTo(Expertise::class, 'expertise_id');
    }
}
