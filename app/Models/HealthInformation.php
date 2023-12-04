<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HealthInformation extends Model
{
    use HasFactory;

    protected $table = 'health_informations';
    protected $primaryKey = 'id';
    protected $keyType = 'integer';
    public $incrementing = true;

    protected $fillable = [
        'bmi',
        'body_fat_percentage',
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
