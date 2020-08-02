<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class EventCategory extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name', 'user_id'
    ];

    /**
     * Relationships
     */    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
