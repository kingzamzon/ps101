<?php

namespace App;

use App\User;
use App\Contact;
use App\Company;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = [
        'full_name', 'email', 'status', 'company_id', 'tags', 'birthday', 'address', 'phone', 'description'
    ];


    /**
     * Relationships
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function contact()
    {
        return $this->belongsTo(Contact::class);
    }

    public function company()
    {
        return $this->belongsTo(Company::class);
    }
}
