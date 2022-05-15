<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\profiles
 *
 * @property int $id
 * @property string|null $phone
 * @property string|null $bio
 * @property \Illuminate\Support\Carbon|null $birthdate
 * @property int $user_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\User $user
 * @method static \Database\Factories\profilesFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|profiles newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|profiles newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|profiles query()
 * @method static \Illuminate\Database\Eloquent\Builder|profiles whereBio($value)
 * @method static \Illuminate\Database\Eloquent\Builder|profiles whereBirthdate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|profiles whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|profiles whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|profiles wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|profiles whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|profiles whereUserId($value)
 * @mixin \Eloquent
 */
class profiles extends Model
{
    use HasFactory;

    protected $dates = ['birthdate'];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
