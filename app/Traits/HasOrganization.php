<?php

namespace App\Traits;

use App\Models\Organization;
use Illuminate\Database\Eloquent\Relations\HasOne;

trait HasOrganization
{
    use HasSubscription;

    public function organization(): HasOne
    {
        return $this->hasOne(Organization::class);
    }

    public function canHaveOrganization(): bool
    {
        return $this->subscriptionPlan->id === 3;
    }

    public function joinOrganization(Organization $organization): void
    {
        $this->organization_id = $organization->id;
        $this->save();
    }
}
