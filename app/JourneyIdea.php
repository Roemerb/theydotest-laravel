<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JourneyIdea extends Model
{
    protected $table = 'journey_idea';

    protected $fillable = [
        'journey_id',
        'idea_id'
    ];
}
