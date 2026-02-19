<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $table = 'settings';

    protected $fillable = [
        'title',
        'description',
        'logo',
        'favicon',
        'phone',
        'email',
        'opengraph_image',
        'meta_title',
        'meta_description',
        'meta_keywords',
        'address',
    ];
}
