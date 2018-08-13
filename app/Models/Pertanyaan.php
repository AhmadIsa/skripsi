<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Pertanyaan
 * @package App\Models
 * @version August 3, 2018, 12:54 pm UTC
 *
 * @property \App\Models\Beratdantinggi beratdantinggi
 * @property \App\Models\KeyakinanBeratdantinggi keyakinanBeratdantinggi
 * @property \App\Models\KeyakinanUmur keyakinanUmur
 * @property \App\Models\RiwayatCidera riwayatCidera
 * @property \App\Models\Umur umur
 * @property \Illuminate\Database\Eloquent\Collection beratdantinggis
 * @property \Illuminate\Database\Eloquent\Collection riwayatCideras
 * @property \Illuminate\Database\Eloquent\Collection umurs
 * @property string pertanyaan
 * @property integer beratdantinggis_id
 * @property integer umurs_id
 * @property integer riwayat_cideras_id
 * @property integer keyakinan_beratdantinggis_id
 * @property integer keyakinan_umurs_id
 */
class Pertanyaan extends Model
{
    use SoftDeletes;

    public $table = 'pertanyaans';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'pertanyaan',
        'beratdantinggis_id',
        'umurs_id',
        'riwayat_cideras_id',
        'keyakinan_beratdantinggis_id',
        'keyakinan_umurs_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'pertanyaan' => 'string',
        'beratdantinggis_id' => 'integer',
        'umurs_id' => 'integer',
        'riwayat_cideras_id' => 'integer',
        'keyakinan_beratdantinggis_id' => 'integer',
        'keyakinan_umurs_id' => 'integer'
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
    public function beratdantinggi()
    {
        return $this->belongsTo(\App\Models\Beratdantinggi::class,'beratdantinggis_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function keyakinanBeratdantinggi()
    {
        return $this->belongsTo(\App\Models\KeyakinanBeratdantinggi::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function keyakinanUmur()
    {
        return $this->belongsTo(\App\Models\KeyakinanUmur::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function riwayatCidera()
    {
        return $this->belongsTo(\App\Models\RiwayatCidera::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function umur()
    {
        return $this->belongsTo(\App\Models\Umur::class,'umurs_id');
    }
}
