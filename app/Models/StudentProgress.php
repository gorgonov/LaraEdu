<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\StudentProgress
 *
 * @property int $id
 * @property int $user_id
 * @property int $lesson_group_id Идентификатор пройденного урока
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\StudentProgress newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\StudentProgress newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\StudentProgress query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\StudentProgress whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\StudentProgress whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\StudentProgress whereLessonGroupId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\StudentProgress whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\StudentProgress whereUserId($value)
 * @mixin \Eloquent
 */
class StudentProgress extends Model
{
    //
}
