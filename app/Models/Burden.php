<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Burden extends Model
{
    use HasFactory;

    protected $fillable = ["age", "gender"];

    static public function fields()
    {
        return ["age", "gender"];
    }

}
