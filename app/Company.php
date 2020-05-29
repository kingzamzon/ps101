<?php

namespace App;

use App\User;
use App\Agent;
use App\Event;
use App\Contact;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Company extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name', 'created_by', 'access', 'tags', 'address', 'phone', 'company_info'
    ];


    /**
     * Relationships
     */
    public function agent()
    {
        return $this->belongsTo(Agent::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'created_by', 'id');
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
