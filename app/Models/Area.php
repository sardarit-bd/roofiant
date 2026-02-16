<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    protected $table = 'areas';

    protected $fillable = [
        'name',
        'slug',
        'address',
    ];

    public function projects()
    {
        return $this->hasMany(related: Project::class);
    }

    public function services()
    {
        return $this->hasMany(related: Service::class);
    }

    public function areaServices()
    {
        return $this->hasMany(related: AreaService::class);
    }

}
