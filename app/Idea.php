<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Idea extends Model
{
    protected $table = 'ideas';

    protected $fillable = [
        'author_id',
        'title',
        'description',
        'solution'
    ];

    public function journeys()
    {
        return $this->belongsToMany(Journey::class);
    }
}
