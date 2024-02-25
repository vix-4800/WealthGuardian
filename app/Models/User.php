<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use App\Traits\HasFamily;
use App\Traits\HasOrganization;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Sanctum\HasApiTokens;

/**
 * App\Models\User
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $two_factor_secret
 * @property string|null $two_factor_recovery_codes
 * @property string|null $two_factor_confirmed_at
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Account> $accounts
 * @property-read int|null $accounts_count
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Laravel\Sanctum\PersonalAccessToken> $tokens
 * @property-read int|null $tokens_count
 *
 * @method static \Database\Factories\UserFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereTwoFactorConfirmedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereTwoFactorRecoveryCodes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereTwoFactorSecret($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 *
 * @property bool $admin
 *
 * @method static \Illuminate\Database\Eloquent\Builder|User whereAdmin($value)
 *
 * @property int $subscription_player_id
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\BankCard> $bankCards
 * @property-read int|null $bank_cards_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\ExpenseCategory> $expensesTypes
 * @property-read int|null $expenses_types_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\IncomeCategory> $incomeTypes
 * @property-read int|null $income_types_count
 * @property-read \App\Models\SubscriptionPlan|null $subscriptionPlan
 *
 * @method static \Illuminate\Database\Eloquent\Builder|User whereSubscriptionPlayerId($value)
 *
 * @property int $subscription_plan_id
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\ExpenseCategory> $expensesCategories
 * @property-read int|null $expenses_categories_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\IncomeCategory> $incomeCategories
 * @property-read int|null $income_categories_count
 *
 * @method static \Illuminate\Database\Eloquent\Builder|User whereSubscriptionPlanId($value)
 *
 * @property int|null $family_id
 * @property int|null $organization_id
 *
 * @method static \Illuminate\Database\Eloquent\Builder|User whereFamilyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereOrganizationId($value)
 *
 * @property-read \App\Models\Family|null $family
 * @property-read \App\Models\Organization|null $organization
 * @property string|null $google_id
 *
 * @method static \Illuminate\Database\Eloquent\Builder|User whereGoogleId($value)
 *
 * @property string|null $github_id
 *
 * @method static \Illuminate\Database\Eloquent\Builder|User whereGithubId($value)
 *
 * @mixin \Eloquent
 */
class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasFamily;
    use HasOrganization;
    use Notifiable;
    use TwoFactorAuthenticatable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'admin',
        'subscription_plan_id',
        'google_id',
        'github_id',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'admin' => 'boolean',
    ];

    public function isAdmin(): bool
    {
        return $this->admin === true;
    }

    public function accounts(): HasMany
    {
        return $this->hasMany(Account::class);
    }

    public function subscriptionPlan(): HasOne
    {
        return $this->hasOne(SubscriptionPlan::class, 'id', 'subscription_plan_id');
    }

    public function expensesCategories(): HasMany
    {
        return $this->hasMany(ExpenseCategory::class);
    }

    public function incomeCategories(): HasMany
    {
        return $this->hasMany(IncomeCategory::class);
    }

    public function bankCards(): HasMany
    {
        return $this->hasMany(BankCard::class);
    }
}
