<?php

namespace App\Enums;

use App\Traits\HasEnumValues;

enum BankCardType: string
{
    use HasEnumValues;

    case CREDIT = 'credit';

    case DEBIT = 'debit';
}
