<?php

namespace App\Repositories;

use App\Models\Beratdantinggi;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class BeratdantinggiRepository
 * @package App\Repositories
 * @version August 3, 2018, 11:35 am UTC
 *
 * @method Beratdantinggi findWithoutFail($id, $columns = ['*'])
 * @method Beratdantinggi find($id, $columns = ['*'])
 * @method Beratdantinggi first($columns = ['*'])
*/
class BeratdantinggiRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'berat_tinggi',
        'users_id',
        'bobots_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Beratdantinggi::class;
    }
}
