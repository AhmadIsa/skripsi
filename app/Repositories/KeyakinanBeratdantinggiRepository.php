<?php

namespace App\Repositories;

use App\Models\KeyakinanBeratdantinggi;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class KeyakinanBeratdantinggiRepository
 * @package App\Repositories
 * @version August 3, 2018, 12:46 pm UTC
 *
 * @method KeyakinanBeratdantinggi findWithoutFail($id, $columns = ['*'])
 * @method KeyakinanBeratdantinggi find($id, $columns = ['*'])
 * @method KeyakinanBeratdantinggi first($columns = ['*'])
*/
class KeyakinanBeratdantinggiRepository extends BaseRepository
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
        return KeyakinanBeratdantinggi::class;
    }
}
