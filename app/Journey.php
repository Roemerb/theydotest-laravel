<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Journey extends Model
{
    protected $table = 'journeys';

    protected $fillable = [
        'author_id',
        'title',
        'description',
        'publish_status',
        'type'
    ];

    public function ideas()
    {
        return $this->belongsToMany(Idea::class);
    }

    public function author()
    {
        return $this->belongsTo(User::class, 'author_id');
    }
}
