<?php

namespace App\Repositories;

use App\Models\RiwayatCidera;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class RiwayatCideraRepository
 * @package App\Repositories
 * @version August 3, 2018, 12:20 pm UTC
 *
 * @method RiwayatCidera findWithoutFail($id, $columns = ['*'])
 * @method RiwayatCidera find($id, $columns = ['*'])
 * @method RiwayatCidera first($columns = ['*'])
*/
class RiwayatCideraRepository extends BaseRepository
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
        return RiwayatCidera::class;
    }
}
