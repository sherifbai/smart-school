<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 *
 * @method static \Illuminate\Database\Eloquent\Builder|TypeOfRoom newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TypeOfRoom newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TypeOfRoom query()
 * @method static \Illuminate\Database\Eloquent\Builder|TypeOfRoom whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TypeOfRoom whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TypeOfRoom whereNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TypeOfRoom whereStage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TypeOfRoom whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TypeOfRoom whereUpdatedAt($value)
 * @mixin \Eloquent
 */

class TypeOfRoom extends Model
{
    use HasFactory;
}
