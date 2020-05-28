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
        $participants = json_decode($participants);
        // return $participants;
        $user_details = [];
        for ($i=0; $i < count($participants); $i++) { 
            $am = Contact::find($participants[$i]);
            array_push($user_details, $am );            
        }

        return $user_details;
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
