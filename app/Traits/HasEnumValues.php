<?php

namespace App\Traits;

trait HasEnumValues
{
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
