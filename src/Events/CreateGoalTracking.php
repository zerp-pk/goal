<?php

namespace Zerp\Goal\Events;

use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Http\Request;
use Zerp\Goal\Models\GoalTracking;

class CreateGoalTracking
{
    use Dispatchable;

    public function __construct(
        public Request $request,
        public GoalTracking $tracking
    ) {}
}
