<?php

namespace App;

use App\User;
use App\Contact;
use App\Company;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Event extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'title', 'start_date', 'end_date', 'category', 'tags', 'user_id', 'deal_id', 'task_id', 'company_id', 'participants', 'description'
    ];


    public function getParticipantsAttribute($participants)
    {
        if($participants != [])
        {
            $participants = json_decode($participants);
            $user_details = [];
            for ($i=0; $i < count($participants); $i++) { 
                $contact_detail = Contact::find($participants[$i]);
                array_push($user_details, $contact_detail );            
            }
            return $user_details;
        }else {
            return $user_details = [];
        }
    }

    public function getCategoryAttribute($category)
    {
        if($category == 0)
        {
            return 'Important';
        }else if($category == 1) {
            return 'Opportunity';
        }else if($category == 2) {
            return 'Optional';
        }else if($category == 3) {
            return 'Crital';
        }else if($category == 4) {
            return 'Meeting';
        }else if($category == 5) {
            return 'Social';
        }else if($category == 6) {
            return 'Time Off';
        }else {
            return 'Private';
        }
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
