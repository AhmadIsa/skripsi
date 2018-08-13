<?php

namespace App\Repositories;

use App\Models\Pertanyaan;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class PertanyaanRepository
 * @package App\Repositories
 * @version August 3, 2018, 12:54 pm UTC
 *
 * @method Pertanyaan findWithoutFail($id, $columns = ['*'])
 * @method Pertanyaan find($id, $columns = ['*'])
 * @method Pertanyaan first($columns = ['*'])
*/
class PertanyaanRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'pertanyaan',
        'beratdantinggis_id',
        'umurs_id',
        'riwayat_cideras_id',
        'keyakinan_beratdantinggis_id',
        'keyakinan_umurs_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Pertanyaan::class;
    }
}
