<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Labresource extends Model
{
    protected $guarded = ['id'];

    protected $table='labresources';

    public function pc()
    {
        return $this->belongsTo(PC::class, 'pc_id');
    }

    public function nonpc()
    {
        return $this->belongsTo(Nonpc::class, 'nonpc_id');
    }

    public function software()
    {
        return $this->belongsTo(Software::class, 'software_id');
    }
}
