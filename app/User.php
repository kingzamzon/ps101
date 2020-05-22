<?php

namespace App;

use App\Agent;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'username', 'account_type', 'date_of_birth'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * Create a random username for user based on email.
     * 
     * @param string $email
     * @return string $username
     */

    public static function username($email){
        $random_letters = strtolower(str_random(7));
        $extracted_email_address = explode('@', $email)[0];
        $username = $extracted_email_address.$random_letters;
        return $username;
    }

    /**
     * Relationships
     */

    public function agent()
    {
        return $this->hasOne(Agent::class);
    } 
}
