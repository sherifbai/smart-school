<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\SubjectType
 *
 * @property int $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|SubjectType newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SubjectType newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SubjectType query()
 * @method static \Illuminate\Database\Eloquent\Builder|SubjectType whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SubjectType whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SubjectType whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SubjectType whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class SubjectType extends Model
{
    use HasFactory;
}
