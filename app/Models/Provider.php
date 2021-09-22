<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Provider extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'region_id',
    ];


    public function providerQuePlan()
    {
        return $this->belongsTo(ProvidersQuePlan::class, "id", "super_plan_provider_id");
    }

}
