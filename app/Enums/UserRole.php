<?php

namespace App\Enums;

enum UserRole: string
{
    case admin = 'admin';
    case staff = 'staff';
    case customer = 'customer';
}
