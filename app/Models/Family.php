<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

/**
 * App\Models\Family
 *
 * @property int $id
 * @property int $creator
 * @property string $name
 * @property string $invitation_code
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 *
 * @method static \Illuminate\Database\Eloquent\Builder|Family newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Family newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Family query()
 * @method static \Illuminate\Database\Eloquent\Builder|Family whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Family whereCreator($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Family whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Family whereInvitationCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Family whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Family whereUpdatedAt($value)
 * @method static \Database\Factories\FamilyFactory factory($count = null, $state = [])
 *
 * @mixin \Eloquent
 */
class Family extends Model
{
    use HasFactory;

    protected $fillable = [
        'creator',
        'invitation_code',
    ];

    public function familyCreator(): HasOne
    {
        return $this->hasOne(User::class, 'id', 'creator');
    }

    public function members(): HasMany
    {
        return $this->hasMany(User::class, 'family_id');
    }
}
