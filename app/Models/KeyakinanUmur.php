<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class KeyakinanUmur
 * @package App\Models
 * @version August 3, 2018, 12:46 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection beratdantinggis
 * @property \Illuminate\Database\Eloquent\Collection Pertanyaan
 * @property \Illuminate\Database\Eloquent\Collection riwayatCideras
 * @property \Illuminate\Database\Eloquent\Collection umurs
 * @property integer bobot
 * @property string keterangan
 */
class KeyakinanUmur extends Model
{
    use SoftDeletes;

    public $table = 'keyakinan_umurs';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'bobot',
        'keterangan'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'bobot' => 'integer',
        'keterangan' => 'string'
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
    public function pertanyaans()
    {
        return $this->hasMany(\App\Models\Pertanyaan::class);
    }
}
