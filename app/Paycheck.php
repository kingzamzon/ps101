<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Paycheck extends Model
{
    protected $fillable = [
        'user_id', 'agent_id', 'company_id', 'paycheck_date', 'deposit_no', 'total_card_process', 'amount_commission', 'total_employee', 'total_benefit_plan', 'commision_benefit_card', 'deposit_date'
    ];

    protected $casts = ['paycheck_date' => 'datetime:m-d-Y', 'deposit_date' => 'datetime:m-d-Y'];

    public function getFormattedPaycheckDateAttribute()
    {
        return $this->paycheck_date->format('m-d-Y');
    }

    public function getFormattedDepositDateAttribute()
    {
        return $this->deposit_date->format('m-d-Y');
    }

    public function getAgentNumberAttribute()
    {
        $formatted_date = $this->format_date_for_agent_number($this->paycheck_date);
        return $formatted_date;
        return "{$this->agent_id}-{$this->formatted_date}";
    }

    public function format_date_for_agent_number($date)
    {
        $format_date = explode('-', $date);
        $year_format = (integer) substr($format_date[0], -2);
        $month_format = (integer) $format_date[1];
        $day_format = (integer) substr($format_date[2], 0, 2);
        return "{$year_format}{$month_format}{$day_format}";
    }

    /**
     * Relationships
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function agent()
    {
        return $this->belongsTo(Agent::class);
    }
}
