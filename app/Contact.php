<?php

namespace App;

use App\Deal;
use App\Task;
use App\Agent;
use App\Event;
use App\Company;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = [
        'full_name', 'email', 'status', 'company_id', 'tags', 'birthday', 'address', 'phone', 'description'
    ];


    /**
     * Relationships
     */
    public function deal()
    {
        return $this->hasMany(Deal::class);
    }

    public function task()
    {
        return $this->hasMany(Task::class);
    }

    public function agent()
    {
        return $this->belongsTo(Agent::class);
    }

    public function company()
    {
        return $this->belongsTo(Company::class);
    }

    public function event()
    {
        return $this->hasMany(Event::class);
    }
}
