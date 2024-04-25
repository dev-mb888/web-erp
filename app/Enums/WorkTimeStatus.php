<?php

namespace App\Enums;

enum WorkTimeStatus:string
{
    case ClockIn = 'clock_in';
    case Pause = 'pause';
    case ClockOut = 'clock_out';
}
