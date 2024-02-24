<?php

namespace App\Traits;

use App\Models\Organization;
use Illuminate\Database\Eloquent\Relations\HasOne;

trait CanHaveOrganization
{
    public function organization(): HasOne
    {
        return $this->hasOne(Organization::class);
    }

    public function canJoinOrganization(): bool
    {
        return $this->subscriptionPlan->id === 3;
    }

    public function joinOrganization(Organization $organization): void
    {
        $this->organization_id = $organization->id;
        $this->save();
    }
}
