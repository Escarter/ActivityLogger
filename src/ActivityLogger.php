<?php

namespace CleBea\Activitylogger;

use App\User;
use CleBea\Activitylogger\Models\ActivityLog;

class ActivityLogger
{
    public function log(User $user, $action, $amount = null, $message)
    {
        return ActivityLog::create([
            'logger' => $user->getFullName(),
            'money_amount' => $amount,
            'log_action' => $action,
            'log_message' => $message,
        ]);
    }
}
