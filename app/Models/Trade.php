<?php

namespace App\Models;

use App\Models\User;
use App\Models\Agent;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Trade extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'price',
        'cover',
        'description',
        'user_id',
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function agents() {
        return $this->belongsToMany(Agent::class);
    }
}