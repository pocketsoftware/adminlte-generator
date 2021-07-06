<?php

namespace App\Repositories;

use App\Models\Tracker;
use App\Repositories\BaseRepository;

/**
 * Class trackerRepository
 * @package App\Repositories
 * @version July 6, 2021, 5:08 pm UTC
*/

class TrackerRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'project',
        'email',
        'verifyfile'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Tracker::class;
    }
}
