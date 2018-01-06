<?php

namespace App\Repositories;

use App\Models\Blog;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class BlogRepository
 * @package App\Repositories
 * @version January 6, 2018, 9:33 am UTC
 *
 * @method Blog findWithoutFail($id, $columns = ['*'])
 * @method Blog find($id, $columns = ['*'])
 * @method Blog first($columns = ['*'])
*/
class BlogRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'title',
        'brief',
        'description',
        'status'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Blog::class;
    }
}
