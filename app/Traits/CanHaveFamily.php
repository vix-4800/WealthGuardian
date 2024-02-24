<?php

namespace App\Traits;

use App\Models\Family;
use Illuminate\Database\Eloquent\Relations\HasOne;

trait CanHaveFamily
{
    public function canHaveFamily(): bool
    {
        return $this->subscriptionPlan->id === 2;
    }

    public function family(): HasOne
    {
        return $this->hasOne(Family::class);
    }

    public function joinFamily(Family $family): void
    {
        $this->family_id = $family->id;
        $this->save();
    }
}
