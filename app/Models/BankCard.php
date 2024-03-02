<?php

namespace App\Models;

use App\Enums\BankCardType;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * App\Models\BankCard
 *
 * @property int $id
 * @property int $user_id
 * @property int|null $account_id
 * @property string $card_number
 * @property string $card_type
 * @property string $bank
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Account|null $account
 * @property-read \App\Models\User|null $user
 *
 * @method static \Illuminate\Database\Eloquent\Builder|BankCard newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BankCard newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BankCard query()
 * @method static \Illuminate\Database\Eloquent\Builder|BankCard whereAccountId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BankCard whereBank($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BankCard whereCardNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BankCard whereCardType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BankCard whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BankCard whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BankCard whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BankCard whereUserId($value)
 *
 * @mixin \Eloquent
 */
class BankCard extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'account_id',
        'card_number',
        'card_type',
    ];

    protected $casts = [
        'card_type' => BankCardType::class,
    ];

    public function account(): BelongsTo
    {
        return $this->belongsTo(Account::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
