<?php

namespace App;

use App\Agent;
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
    public function agent()
    {
        return $this->belongsTo(Agent::class);
    }

    public function company()
    {
        return $this->belongsTo(Company::class);
    }
}
