<?php

namespace Zerp\Goal\Events;

use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;
use Zerp\Goal\Models\GoalMilestone;

class DestroyGoalMilestone
{
    use Dispatchable;

    public function __construct(
        public GoalMilestone $milestone
    ) {}
}