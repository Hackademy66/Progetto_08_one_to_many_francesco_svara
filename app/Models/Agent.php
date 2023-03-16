<?php

namespace App\Models;

use App\Models\Sell;
use App\Models\Agent;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Agent extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'phone',
        'email',
        'cover',
        'user_id',
    ];

    public function sells() {
        return $this->belongsToMany(Sell::class);
    }

    public function trades() {
        return $this->belongsToMany(Trade::class);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }
}
