<?php

namespace App\Enums;

enum UserAccountType: string
{
    case User = 'user';
    case Admin = 'admin';
}
