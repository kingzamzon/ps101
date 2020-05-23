<?php

namespace App;

use App\User;
use App\Agent;
use App\Event;
use App\Contact;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $fillable = [
        'name', 'access', 'tags', 'address', 'phone', 'company_info'
    ];

    // public function getFullNameAttribute()
    // {
    //     return "{$this->first_name} {$this->last_name}";
    // }

    /**
     * Relationships
     */
    public function agent()
    {
        return $this->belongsTo(Agent::class);
    }

    public function contact()
    {
        return $this->hasOne(Contact::class);
    }

    public function event()
    {
        return $this->hasMany(Event::class);
    }
}
