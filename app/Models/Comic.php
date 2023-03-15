<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    use HasFactory;

    // this doesnt work for some reason
    // protected $fillable =['*'];

    protected $guarded = [];
}
