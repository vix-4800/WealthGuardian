<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\ExpenseType
 *
 * @property int $id
 * @property int $user_id
 * @property string $name
 *
 * @method static \Illuminate\Database\Eloquent\Builder|ExpenseType newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ExpenseType newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ExpenseType query()
 * @method static \Illuminate\Database\Eloquent\Builder|ExpenseType whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ExpenseType whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ExpenseType whereUserId($value)
 *
 * @mixin \Eloquent
 */
class ExpenseType extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'name',
        'user_id',
    ];
}
