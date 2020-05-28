<?php

namespace App;

use App\User;
use App\Document;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Agent extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'user_id', 'company_name', 'tel', 'tin', 'address', 'home_no'
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
        return $this->belongsTo(User::class);
    }
    
    public function document()
    {
        return $this->hasMany(Document::class);
    }
}
