<?php

namespace App;

use App\User;
use App\Agent;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Note extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'user_id', 'access', 'description', 'agent_id'
    ];

    /**
     * Relationships
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    public function agent()
    {
        return $this->hasMany(Agent::class);
    }
}
