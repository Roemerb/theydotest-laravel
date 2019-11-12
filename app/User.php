<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    protected $table = 'users';

    protected $fillable = [
        'first_name',
        'last_name'
    ];

    public function ideas()
    {
        return $this->hasMany(Idea::class, 'author_id');
    }

    public function journeys()
    {
        return $this->hasMany(Journey::class, 'author_id');
    }
}
