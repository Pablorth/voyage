<?php

namespace App;

use Illuminate\Database\Eloquent\Factory;
use Illuminate\Database\Eloquent\Model;

class Voyage extends Model
{

    use HasFactory;

    protected $fillable = ['name', 'place', 'country', 'date', 'cost', 'organizer', 'rating'];
}
