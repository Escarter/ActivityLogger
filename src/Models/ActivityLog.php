<?php

namespace CleBea\Activitylogger\Models;

use Illuminate\Database\Eloquent\Model;

class ActivityLog extends Model
{
    protected $table = 'activity_logger';
    protected $fillable = ['logger', 'money_amount', 'log_action', 'log_message'];
}
