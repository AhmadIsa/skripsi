<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class RiwayatCidera
 * @package App\Models
 * @version August 3, 2018, 12:20 pm UTC
 *
 * @property \App\Models\Bobot bobot
 * @property \App\Models\User user
 * @property \Illuminate\Database\Eloquent\Collection beratdantinggis
 * @property \Illuminate\Database\Eloquent\Collection Pertanyaan
 * @property \Illuminate\Database\Eloquent\Collection umurs
 * @property string riwayat_cidera
 * @property integer users_id
 * @property integer bobots_id
 */
class RiwayatCidera extends Model
{
    use SoftDeletes;

    public $table = 'riwayat_cideras';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'riwayat_cidera',
        'users_id',
        'bobots_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'riwayat_cidera' => 'string',
        'users_id' => 'integer',
        'bobots_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function bobot()
    {
        return $this->belongsTo(\App\Models\Bobot::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function user()
    {
        return $this->belongsTo(\App\Models\User::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function pertanyaans()
    {
        return $this->hasMany(\App\Models\Pertanyaan::class);
    }
}
