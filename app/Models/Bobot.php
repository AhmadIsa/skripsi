<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Bobot
 * @package App\Models
 * @version August 8, 2018, 9:36 am UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection Beratdantinggi
 * @property \Illuminate\Database\Eloquent\Collection RiwayatCidera
 * @property \Illuminate\Database\Eloquent\Collection Umur
 * @property string bobot
 */
class Bobot extends Model
{
    use SoftDeletes;

    public $table = 'bobots';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'bobot'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'bobot' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function beratdantinggis()
    {
        return $this->hasMany(\App\Models\Beratdantinggi::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function riwayatCideras()
    {
        return $this->hasMany(\App\Models\RiwayatCidera::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function umurs()
    {
        return $this->hasMany(\App\Models\Umur::class);
    }
}
