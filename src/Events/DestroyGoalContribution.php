<?php

namespace Zerp\Goal\Events;

use Illuminate\Foundation\Events\Dispatchable;
use Zerp\Goal\Models\GoalContribution;

class DestroyGoalContribution
{
    use Dispatchable;

    public function __construct(
        public GoalContribution $goalContribution
    ) {}
}
