<?php

namespace Zerp\Goal\Events;

use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Http\Request;
use Illuminate\Queue\SerializesModels;
use Zerp\Goal\Models\GoalCategory;

class CreateGoalCategory
{
    use Dispatchable;

    public function __construct(
        public Request $request,
        public GoalCategory $category
    ) {}
}
