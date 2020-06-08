<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\PersonalMessage
 *
 * @property int $id
 * @property float $from_user_id Отправитель сообщения
 * @property float $to_user_id Получатель сообщения
 * @property string $text Текст сообщения
 * @property int $is_new Новое сообщение (не прочитано получателем)
 * @property int $important_state Важность сообщения)
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\PersonalMessage newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\PersonalMessage newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\PersonalMessage query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\PersonalMessage whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\PersonalMessage whereFromUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\PersonalMessage whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\PersonalMessage whereImportantState($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\PersonalMessage whereIsNew($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\PersonalMessage whereText($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\PersonalMessage whereToUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\PersonalMessage whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class PersonalMessage extends Model
{
    //
}
