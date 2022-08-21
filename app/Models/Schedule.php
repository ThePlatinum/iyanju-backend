<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
  //
  protected $casts = [
    'schedule_date' => 'date',
  ];

  protected $fillable = [
    'submission_id',
    'schedule_date',
  ];
  public function itsSub()
  {
    return $this->belongsTo(Submissions::class, 'submission_id');
  }
}
