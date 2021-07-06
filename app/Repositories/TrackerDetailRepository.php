<?php

namespace App\Repositories;

use App\Models\TrackerDetail;
use App\Repositories\BaseRepository;

/**
 * Class trackerdetailRepository
 * @package App\Repositories
 * @version July 6, 2021, 5:49 pm UTC
*/

class TrackerDetailRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'OC',
        'fullname',
        'deladdr',
        'CSZ',
        'intelligentmailbarcode',
        'cardnumberwcheck',
        'type',
        'serialnumber',
        'imbalpha'
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
        return TrackerDetail::class;
    }
}
