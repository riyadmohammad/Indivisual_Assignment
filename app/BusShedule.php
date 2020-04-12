<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BusShedule extends Model
{
    //

    protected $fillable = [
        'name', 'arrival', 'departrue','route','seat_rows','seat_columns'
    ]; 
}
