<?php

namespace App\Enums;

enum AccountType: string
{
    case TYPE_CARD = 'card';

    case TYPE_CASH = 'cash';

    case TYPE_E_WALLET = 'e-wallet';

    case TYPE_DEPOSIT = 'deposit';

    /**
     * Get all enum values
     */
    public static function values(): array
    {
        $types = [];

        foreach (self::cases() as $type) {
            $types[] = $type->value;
        }

        return $types;
    }
}
