<?php

namespace Zerp\Goal\Events;

use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;
use Zerp\Goal\Models\GoalCategory;

class DestroyGoalCategory
{
    use Dispatchable;

    public function __construct(
        public GoalCategory $category
    ) {}
}
