<?php

namespace Zerp\Goal\Events;

use Illuminate\Foundation\Events\Dispatchable;
use Zerp\Goal\Models\GoalTracking;

class DestroyGoalTracking
{
    use Dispatchable;

    public function __construct(
        public GoalTracking $tracking
    ) {}
}
