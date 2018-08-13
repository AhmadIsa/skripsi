<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Umur
 * @package App\Models
 * @version August 3, 2018, 11:33 am UTC
 *
 * @property \App\Models\Bobot bobot
 * @property \App\Models\User user
 * @property \Illuminate\Database\Eloquent\Collection beratdantinggis
 * @property \Illuminate\Database\Eloquent\Collection Pertanyaan
 * @property \Illuminate\Database\Eloquent\Collection riwayatCideras
 * @property integer usia
 * @property integer users_id
 * @property integer bobots_id
 */
class Umur extends Model
{
    use SoftDeletes;

    public $table = 'umurs';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'usia',
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
        'usia' => 'integer',
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
