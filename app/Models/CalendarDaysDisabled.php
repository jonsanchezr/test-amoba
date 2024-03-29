<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CalendarDaysDisabled extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'calendar_days_disabled';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        "calendar_id",
		"day",
		"enabled"
    ];
}
