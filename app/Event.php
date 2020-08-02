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
        'title', 'category', 'created_by', 'user_id', 'start_date', 'length', 'description'
    ];


    protected $appends = [
        'new_start_date'
    ];

    /**
     * Getters
     */
    public function getNewStartDateAttribute()
    {
        $format_date = explode('-', $this->start_date);
        $year_format = explode(' ', $format_date[2])[0];
        $month_format = $format_date[0];
        $day_format = $format_date[1];
        return "{$year_format}-{$month_format}-{$day_format}";
    }

    // public function getNewEndDateAttribute()
    // {
    //     $format_date = explode('-', $this->end_date);
    //     $year_format = $format_date[2];
    //     $month_format = $format_date[0];
    //     $day_format = $format_date[1];
    //     return "{$year_format}-{$month_format}-{$day_format}";
    // }

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
