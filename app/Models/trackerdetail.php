<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class trackerdetail
 * @package App\Models
 * @version July 6, 2021, 5:49 pm UTC
 *
 * @property int $OC
 * @property string $fullname
 * @property string $deladdr
 * @property string $CSZ
 * @property string $intelligentmailbarcode
 * @property string $cardnumberwcheck
 * @property string $type
 * @property string $serialnumber
 * @property string $imbalpha
 */
class TrackerDetail extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'trackerdetails';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'qc',
        'fullname',
        'deladdr',
        'csz',
        'intelligentmailbarcode',
        'cardnumberwcheck',
        'type',
        'serialnumber',
        'imbalpha'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'qc' => 'integer',
        'fullname' => 'string',
        'deladdr' => 'string',
        'csz' => 'string',
        'intelligentmailbarcode' => 'string',
        'cardnumberwcheck' => 'string',
        'type' => 'string',
        'serialnumber' => 'string',
        'imbalpha' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'qc' => 'numeric',
        'fullname' => 'required',
        'deladdr' => 'required',
        'csz' => 'required',
        'intelligentmailbarcode' => 'numeric',
        'cardnumberwcheck' => 'numeric',
        'type' => 'required',
        'serialnumber' => 'required',
        'imbalpha' => 'required'
    ];

    
}
