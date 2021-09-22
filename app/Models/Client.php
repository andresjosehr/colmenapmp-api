<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $fillable = ["full_name", "age", "gender", "region_id", "rut", "email", "preferent_contact_time_start", "preferent_contact_time_end", "phone", "isapre_id", "monthly_liquid_income", "user_id"];

    static public function fields()
    {
        return ["full_name", "age", "gender", "region_id", "rut", "email", "preferent_contact_time_start", "preferent_contact_time_end",  "phone", "isapre_id", "monthly_liquid_income", "user_id"];
    }


    /**
     * Get the phone associated with the user.
     */
    public function burdens()
    {
        return $this->hasMany(Burden::class);
    }

    /**
     * Get the phone associated with the user.
     */
    public function isapre()
    {
        return $this->belongsTo(Isapre::class);
    }

    public function region()
    {
        return $this->belongsTo(Region::class);
    }

    public function couple()
    {
        return $this->hasOne(Couple::class);
    }

}
