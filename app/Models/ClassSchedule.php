<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * App\Models\ClassSchedule
 *
 * @property int $id
 * @property int $subject_id
 * @property int $teacher_id
 * @property int $group_id
 * @property int $room_id
 * @property string $date
 * @property string $start_hour
 * @property string $end_hour
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|ClassSchedule newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ClassSchedule newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ClassSchedule query()
 * @method static \Illuminate\Database\Eloquent\Builder|ClassSchedule whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ClassSchedule whereDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ClassSchedule whereEndHour($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ClassSchedule whereGroupId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ClassSchedule whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ClassSchedule whereRoomId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ClassSchedule whereStartHour($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ClassSchedule whereSubjectId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ClassSchedule whereTeacherId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ClassSchedule whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class ClassSchedule extends Model
{
    use HasFactory;

    public function group(): BelongsTo
    {
        return $this->belongsTo(Group::class);
    }

    public function teacher(): BelongsTo
    {
        return $this->belongsTo(Teacher::class);
    }

    public function subject(): BelongsTo
    {
        return $this->belongsTo(Subject::class);
    }

    public function room(): BelongsTo
    {
        return $this->belongsTo(Room::class);
    }
}
