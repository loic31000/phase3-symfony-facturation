<?php

namespace App\Enum;

enum Unit: string
{
    case PIECE = 'piece';
    case HOUR = 'hour';
    case DAY = 'day';
    case MONTH = 'month';
    case YEAR = 'year';
}
