<?php

namespace App\Repositories;

use App\Models\Bobot;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class BobotRepository
 * @package App\Repositories
 * @version August 8, 2018, 9:36 am UTC
 *
 * @method Bobot findWithoutFail($id, $columns = ['*'])
 * @method Bobot find($id, $columns = ['*'])
 * @method Bobot first($columns = ['*'])
*/
class BobotRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'bobot'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Bobot::class;
    }
}
