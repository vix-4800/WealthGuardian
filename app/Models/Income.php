<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * App\Models\Income
 *
 * @property int $id
 * @property int $account_id
 * @property string $name
 * @property string $type
 * @property int $amount
 * @property string $date
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Account|null $account
 *
 * @method static \Illuminate\Database\Eloquent\Builder|Income newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Income newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Income query()
 * @method static \Illuminate\Database\Eloquent\Builder|Income whereAccountId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Income whereAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Income whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Income whereDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Income whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Income whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Income whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Income whereUpdatedAt($value)
 *
 * @property int|null $type_id
 *
 * @method static \Illuminate\Database\Eloquent\Builder|Income whereTypeId($value)
 *
 * @mixin \Eloquent
 */
class Income extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'account_id',
        'type_id',
        'amount',
        'date',
    ];

    public function account(): BelongsTo
    {
        return $this->belongsTo(Account::class);
    }
}
