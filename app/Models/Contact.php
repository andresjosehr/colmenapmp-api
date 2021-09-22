<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    
    protected $fillable = ["client_id", "plan_id", "message" ];

    static public function fields()
    {
        return ["client_id", "plan_id", "message" ];
    }

    /**
     * Get the phone associated with the user.
     */
    public function client()
    {
        return $this->belongsTo(Client::class);
    }

    /**
     * Get the phone associated with the user.
     */
    public function plan()
    {
        return $this->belongsTo(Plan::class);
    }

}
