<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\TeacherDegree
 *
 * @property int $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|TeacherDegree newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TeacherDegree newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TeacherDegree query()
 * @method static \Illuminate\Database\Eloquent\Builder|TeacherDegree whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TeacherDegree whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TeacherDegree whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TeacherDegree whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class TeacherDegree extends Model
{
    use HasFactory;
}
