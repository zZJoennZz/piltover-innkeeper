<?php

namespace App\Enums;

enum ScheduleBlockStatus: string
{
    case Pending = 'pending';
    case Confirmed = 'confirmed';
    case Reserved = 'reserved';
    case CheckedIn = 'checked_in';
    case CheckedOut = 'checked_out';
    case Cancelled = 'cancelled';
    case NoShow = 'no_show';
    case Waitlisted = 'waitlisted';
}
