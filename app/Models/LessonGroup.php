<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\LessonGroup
 *
 * @property int $id
 * @property int $lesson_id
 * @property string $date_start Дата начала
 * @property int $user_id
 * @property int $group_id Ссылка на учебную группу
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\LessonGroup newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\LessonGroup newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\LessonGroup query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\LessonGroup whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\LessonGroup whereDateStart($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\LessonGroup whereGroupId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\LessonGroup whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\LessonGroup whereLessonId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\LessonGroup whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\LessonGroup whereUserId($value)
 * @mixin \Eloquent
 */
class LessonGroup extends Model
{
    //
}
