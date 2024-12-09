<?php

namespace App\Enums;

enum TaskStatus: string
{
    case InProgress = 'in_progress';
    case Ongoing = 'ongoing';
    case Pending = 'pending';
    case Completed = 'completed';
    case Cancelled = 'cancelled';

    public static function options(): array
    {
        $options = [];

        foreach (self::cases() as $case) {
            $options[] = [
                'name' => $case->name,
                'value' => $case->value,
            ];
        }

        return $options;
    }
}
