<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\CourseGroup
 *
 * @property int $id
 * @property int $course_id
 * @property string $date_start Дата начала
 * @property string|null $comment Комментарий (необязательное поле
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CourseGroup newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CourseGroup newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CourseGroup query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CourseGroup whereComment($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CourseGroup whereCourseId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CourseGroup whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CourseGroup whereDateStart($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CourseGroup whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CourseGroup whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class CourseGroup extends Model
{
    //
}
