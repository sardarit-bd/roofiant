<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $table = 'teams';

    protected $fillable = [
        'name',
        'image',
        'designation',
        'slug',
        'description',
        'teamcategory_id',
    ];

    public function teamcategory()
    {
        return $this->belongsTo(Teamcategory::class);
    }
}
