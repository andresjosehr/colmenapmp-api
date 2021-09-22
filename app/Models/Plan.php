<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    use HasFactory;

    protected $fillable = [
        'base_factor',
        'pdf'
    ];


    /**
     * Get the phone associated with the user.
     */
    public function isapre()
    {
        return $this->belongsTo(Isapre::class);
    }

    /**
     * Get the phone associated with the user.
     */
    public function planType()
    {
        return $this->belongsTo(PlanType::class);
    }

    public function scores()
    {
        return $this->hasMany(Score::class);
    }

    // /**
    //  * Get the phone associated with the user.
    //  */
    // public function hospitable()
    // {
    //     return $this->hasMany(PlanProvider::class);
    // }

    //  /**
    //  * Get the phone associated with the user.
    //  */
    // public function ambulatory()
    // {
    //     return $this->hasMany(PlanProvider::class);
    // }

    /**
     * Get the phone associated with the user.
     */
    public function providers()
    {
        return $this->hasMany(PlanProvider::class);
    }

}
