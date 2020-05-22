<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Agent extends Model
{
    protected $fillable = [
        'first_name', 'last_name'
    ];

    public function getFullNameAttribute()
    {
        return "{$this->first_name} {$this->last_name}";
    }
    /**
     * Relationships
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'created_by', 'id');
    }
    
}
