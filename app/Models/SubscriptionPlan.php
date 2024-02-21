<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * App\Models\SubscriptionPlan
 *
 * @property int $id
 * @property string $name
 * @property string $description
 * @property string $cost
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\SubscriptionPlanFeature> $features
 * @property-read int|null $features_count
 *
 * @method static \Illuminate\Database\Eloquent\Builder|SubscriptionPlan newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SubscriptionPlan newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SubscriptionPlan query()
 * @method static \Illuminate\Database\Eloquent\Builder|SubscriptionPlan whereCost($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SubscriptionPlan whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SubscriptionPlan whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SubscriptionPlan whereName($value)
 *
 * @mixin \Eloquent
 */
class SubscriptionPlan extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'name',
        'description',
        'cost',
    ];

    public function features(): HasMany
    {
        return $this->hasMany(SubscriptionPlanFeature::class);
    }
}
