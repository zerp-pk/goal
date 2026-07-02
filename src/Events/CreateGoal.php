<?php

namespace Zerp\Goal\Events;

use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Http\Request;
use Illuminate\Queue\SerializesModels;
use Zerp\Goal\Models\Goal;

class CreateGoal
{
    use Dispatchable;

    public function __construct(
        public Request $request,
        public Goal $goal
    ) {}
}