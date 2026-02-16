<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AreaService extends Model
{
    protected $table = 'area_services';

    protected $fillable = [
        'area_id',
        'service_id',
    ];

    public function area()
    {
        return $this->belongsTo(Area::class);
    }

    public function service()
    {
        return $this->belongsTo(Service::class);
    }
}
