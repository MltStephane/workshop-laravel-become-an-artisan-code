<?php

namespace App\Enums;

enum TaskStatus: string
{
    case InProgress = 'in_progress';
    case Ongoing = 'ongoing';
    case Pending = 'pending';
    case Completed = 'completed';
    case Cancelled = 'cancelled';
}
