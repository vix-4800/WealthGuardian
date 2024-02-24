<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * App\Models\SubscriptionPlanFeature
 *
 * @property int $id
 * @property int $subscription_plan_id
 * @property string $feature
 * @property-read \App\Models\SubscriptionPlan|null $plan
 *
 * @method static \Illuminate\Database\Eloquent\Builder|SubscriptionPlanFeature newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SubscriptionPlanFeature newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SubscriptionPlanFeature query()
 * @method static \Illuminate\Database\Eloquent\Builder|SubscriptionPlanFeature whereFeature($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SubscriptionPlanFeature whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SubscriptionPlanFeature whereSubscriptionPlanId($value)
 *
 * @property string $name
 *
 * @method static \Illuminate\Database\Eloquent\Builder|SubscriptionPlanFeature whereName($value)
 * @method static \Database\Factories\SubscriptionPlanFeatureFactory factory($count = null, $state = [])
 *
 * @mixin \Eloquent
 */
class SubscriptionPlanFeature extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'subscription_plan_id',
        'name',
    ];

    public function plan(): BelongsTo
    {
        return $this->belongsTo(SubscriptionPlan::class);
    }
}
