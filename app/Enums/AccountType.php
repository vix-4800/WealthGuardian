<?php

namespace App\Enums;

use App\Traits\HasEnumValues;

enum AccountType: string
{
    use HasEnumValues;

    case TYPE_CARD = 'card';

    case TYPE_CASH = 'cash';

    case TYPE_E_WALLET = 'e-wallet';

    case TYPE_DEPOSIT = 'deposit';
}
