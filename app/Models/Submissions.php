<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Submissions extends Model
{
    protected $fillable = [
      'displayname', 'country',
      'submission_type', 'email', 'iyanju', 'image'
    ];
}
