<?php

namespace App\Traits;

use App\Models\Family;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Str;

trait CanHaveFamily
{
    public function canHaveFamily(): bool
    {
        return $this->subscriptionPlan->id === 2;
    }

    public function family(): BelongsTo
    {
        return $this->BelongsTo(Family::class);
    }

    public function joinFamily(Family $family): void
    {
        $this->family_id = $family->id;
        $this->save();
    }

    public function createNewFamily(): void
    {
        $family = Family::create([
            'creator' => auth()->id(),
            'invitation_code' => Str::random(10),
        ]);

        $this->joinFamily($family);
    }

    public function leaveFamily(): void
    {
        $this->family_id = null;
        $this->save();
    }

    public function isFamilyCreator(): bool
    {
        return $this->family ? auth()->id() === $this->family->creator : false;
    }
}
