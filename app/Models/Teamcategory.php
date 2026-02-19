<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Teamcategory extends Model
{
    protected $table = 'teamcategories';

    protected $fillable = [
        'name',
        'slug',
    ];

    public function teams()
    {
        return $this->hasMany(Team::class);
    }
}
