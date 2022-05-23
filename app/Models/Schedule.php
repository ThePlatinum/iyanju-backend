<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
  //
  protected $fillable = [
    'submission_id',
    'schedule_date',
  ];
}
