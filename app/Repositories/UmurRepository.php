<?php

namespace App\Repositories;

use App\Models\Umur;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class UmurRepository
 * @package App\Repositories
 * @version August 3, 2018, 11:33 am UTC
 *
 * @method Umur findWithoutFail($id, $columns = ['*'])
 * @method Umur find($id, $columns = ['*'])
 * @method Umur first($columns = ['*'])
*/
class UmurRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'usia',
        'users_id',
        'bobots_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Umur::class;
    }
}
