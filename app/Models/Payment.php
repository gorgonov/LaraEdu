<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Payment
 *
 * @property int $id
 * @property string|null $payed_at Дата и время платежа
 * @property string|null $approved_at Дата и время подтверждения платежа
 * @property int|null $approved_by Ссылка на пользователя, подтвердившего платеж
 * @property string|null $path_of_check Путь к скриншоту чека
 * @property int|null $sum Сумма платежа
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int $user_id
 * @property int $course_group_id
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Payment newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Payment newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Payment query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Payment whereApprovedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Payment whereApprovedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Payment whereCourseGroupId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Payment whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Payment whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Payment wherePathOfCheck($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Payment wherePayedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Payment whereSum($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Payment whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Payment whereUserId($value)
 * @mixin \Eloquent
 */
class Payment extends Model
{
    //
}
