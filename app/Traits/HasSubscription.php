<?php

namespace App\Traits;

use App\Models\SubscriptionPlan;
use Illuminate\Database\Eloquent\Relations\HasOne;

trait HasSubscription
{
    public function subscriptionPlan(): HasOne
    {
        return $this->hasOne(SubscriptionPlan::class, 'id', 'subscription_plan_id');
    }

    public function changeSubscriptionPlan(SubscriptionPlan $subscriptionPlan)
    {
        $this->subscription_plan_id = $subscriptionPlan->id;
        $this->save();
    }

    public function cancelSubscriptionPlan()
    {
        $this->subscription_plan_id = 1;
        $this->save();
    }
}
