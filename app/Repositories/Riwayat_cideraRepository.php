<?php

namespace App\Repositories;

use App\Models\Riwayat_cidera;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class Riwayat_cideraRepository
 * @package App\Repositories
 * @version August 3, 2018, 12:07 pm UTC
 *
 * @method Riwayat_cidera findWithoutFail($id, $columns = ['*'])
 * @method Riwayat_cidera find($id, $columns = ['*'])
 * @method Riwayat_cidera first($columns = ['*'])
*/
class Riwayat_cideraRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'riwayat_cidera',
        'users_id',
        'bobots_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Riwayat_cidera::class;
    }
}
