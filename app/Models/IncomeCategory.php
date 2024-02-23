<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\IncomeCategory
 *
 * @property int $id
 * @property int $user_id
 * @property string $name
 *
 * @method static \Illuminate\Database\Eloquent\Builder|IncomeCategory newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|IncomeCategory newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|IncomeCategory query()
 * @method static \Illuminate\Database\Eloquent\Builder|IncomeCategory whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|IncomeCategory whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|IncomeCategory whereUserId($value)
 *
 * @mixin \Eloquent
 */
class IncomeCategory extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'name',
        'user_id',
    ];
}
