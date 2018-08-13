<?php

namespace App\Repositories;

use App\Models\Keyakinan;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class KeyakinanRepository
 * @package App\Repositories
 * @version August 3, 2018, 11:35 am UTC
 *
 * @method Keyakinan findWithoutFail($id, $columns = ['*'])
 * @method Keyakinan find($id, $columns = ['*'])
 * @method Keyakinan first($columns = ['*'])
*/
class KeyakinanRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'bobot',
        'keterangan'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Keyakinan::class;
    }
}
