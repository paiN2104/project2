<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;
    protected $fillable = [
        "name",
        "phone",
        "email",
        "password",
        "gender",
        "age",
        "joindate",
        "address",
        "city",
        "state",
        "country",
        "postcode",
        "photo",
        "description"
    ];
}
