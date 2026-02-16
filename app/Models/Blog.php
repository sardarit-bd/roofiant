<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $table = 'blogs';

    protected $fillable = ['title', 'slug', 'user_id', 'image', 'content'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // hidden
    protected $hidden = ['created_at', 'updated_at'];
}
