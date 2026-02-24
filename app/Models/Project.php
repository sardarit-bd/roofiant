<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $table = 'projects';

    protected $fillable = [
        'title',
        'slug',
        'area_id',
        'client',
        'deadline',
        'content',
        'type',
        'warranty',
        'size',
    ];

    public function area()
    {
        return $this->belongsTo(Area::class);
    }

    public function images()
    {
        return $this->hasMany(ProjectImage::class);
    }

    public function services()
    {
        return $this->belongsToMany(
            Service::class,
            'project_services',
            'project_id',
            'service_id'
        );
    }
}
