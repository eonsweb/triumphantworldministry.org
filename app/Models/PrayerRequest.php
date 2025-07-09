<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PrayerRequest extends Model
{
    protected $fillable = ['name','email','request'];

    protected $attributes = [ 'email' => 'no-reply@example.com'];
}
