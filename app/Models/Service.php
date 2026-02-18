<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $table = 'services';

    protected $fillable = ['name', 'slug'];

    public $timestamps = false;

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function projects()
    {
        return $this->belongsToMany(
            Project::class,
            'project_services',
            'service_id',
            'project_id'
        );
    }

    public function projectServices()
    {
        return $this->hasMany(ProjectService::class);
    }

    public function areas()
    {
        return $this->belongsToMany(
            Area::class,
            'area_services',
            'service_id',
            'area_id'
        );
    }


    public function areaServices()
    {
        return $this->hasMany(AreaService::class);
    }

    public function services()
    {
        return $this->belongsToMany(Service::class);
    }


}
