<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PointHistory extends Model
{
  protected $fillable = [
    'user_id',
    'order_id',
    'total_point',
    'point_action_flg',
    'created_at'
  ];
}
