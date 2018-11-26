<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Point extends Model
{
  protected $fillable = ['user_id', 'total_point', 'update_at'];
}
