<?php

namespace App\Repositories;

use App\Models\KeyakinanUmur;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class KeyakinanUmurRepository
 * @package App\Repositories
 * @version August 3, 2018, 12:46 pm UTC
 *
 * @method KeyakinanUmur findWithoutFail($id, $columns = ['*'])
 * @method KeyakinanUmur find($id, $columns = ['*'])
 * @method KeyakinanUmur first($columns = ['*'])
*/
class KeyakinanUmurRepository extends BaseRepository
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
        return KeyakinanUmur::class;
    }
}
