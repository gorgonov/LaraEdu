<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Профиль учителя
 * 
 * App\Models\TeacherProfile
 *
 * @property int $id
 * @property string $description Описание опыта
 * @property int $user_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\TeacherProfile newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\TeacherProfile newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\TeacherProfile query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\TeacherProfile whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\TeacherProfile whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\TeacherProfile whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\TeacherProfile whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\TeacherProfile whereUserId($value)
 * @mixin \Eloquent
 * @property-read \App\Models\User $user
 */
class TeacherProfile extends Model
{

    /**
     * Пользователь
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        // Описание учителя принадлежит пользователю
        return $this->belongsTo(User::class);
    }

}
