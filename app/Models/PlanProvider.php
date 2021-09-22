<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlanProvider extends Model
{
    use HasFactory;

    protected $fillable = [
        'percentage',
    ];

    /**
     * Get the phone associated with the user.
     */
    public function providerData()
    {
        return $this->hasOne(Provider::class, "id", "provider_id")->select("id","name");
    
    
    } public function providerQuePlan()
    {
        return $this->belongsTo(ProvidersQuePlan::class, "plan_id", "super_plan_provider_id");
    }
}
