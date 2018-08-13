<?php

namespace App\Repositories;

use App\Models\Buku;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class BukuRepository
 * @package App\Repositories
 * @version March 13, 2018, 9:22 am UTC
 *
 * @method Buku findWithoutFail($id, $columns = ['*'])
 * @method Buku find($id, $columns = ['*'])
 * @method Buku first($columns = ['*'])
*/
class BukuRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id',
        'judul_buku',
        'penulis',
        'penerbit'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Buku::class;
    }
}
