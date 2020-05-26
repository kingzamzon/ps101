<?php

namespace App;

use App\User;
use App\Contact;
use App\Company;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = [
        'title', 'start_date', 'end_date', 'category', 'tags', 'user_id', 'deal_id', 'task_id', 'company_id', 'participants', 'description'
    ];


    public function getTitleAttribute()
    {
        return "00" ;
    }
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
