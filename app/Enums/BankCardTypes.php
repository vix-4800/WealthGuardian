<?php

namespace App\Enums;

enum BankCardType: string
{
    case CREDIT = 'credit';

    case DEBIT = 'debit';

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
