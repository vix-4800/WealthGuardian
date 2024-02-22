<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\IncomeType
 *
 * @property int $id
 * @property int $user_id
 * @property string $name
 *
 * @method static \Illuminate\Database\Eloquent\Builder|IncomeType newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|IncomeType newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|IncomeType query()
 * @method static \Illuminate\Database\Eloquent\Builder|IncomeType whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|IncomeType whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|IncomeType whereUserId($value)
 *
 * @mixin \Eloquent
 */
class IncomeType extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'user_id',
    ];
}
