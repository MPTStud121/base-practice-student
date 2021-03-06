<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 * App\Models\Speciality
 *
 * @property int         $id
 * @property string      $speciality
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Speciality newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Speciality newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Speciality query()
 * @method static \Illuminate\Database\Eloquent\Builder|Speciality whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Speciality whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Speciality whereSpeciality($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Speciality whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Speciality extends Model
{

    use HasFactory;

    protected $fillable
        = [
            'id',
            'speciality',
        ];

}
