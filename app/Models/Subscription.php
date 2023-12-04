<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    use HasFactory;

    protected $table = 'subscriptions';
    protected $primaryKey = 'id';
    protected $keyType = 'integer';
    public $incrementing = true;

    protected $fillable = [
        'user_id',
        'payment_id',
        'personal_trainer_id',
        'membership_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function payment()
    {
        return $this->belongsTo(Payment::class, 'payment_id');
    }

    public function personalTrainer()
    {
        return $this->belongsTo(PersonalTrainer::class, 'personal_trainer_id');
    }

    public function membership()
    {
        return $this->belongsTo(Membership::class, 'membership_id');
    }
}
