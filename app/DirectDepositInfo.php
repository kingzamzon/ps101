<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DirectDepositInfo extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'user_id', 'bank_name', 'account_name', 'account_no', 'routing_no'
    ];

    /**
    * Relationships
    */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
