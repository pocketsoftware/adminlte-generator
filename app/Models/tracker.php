<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class tracker
 * @package App\Models
 * @version July 6, 2021, 5:08 pm UTC
 *
 * @property string $project
 * @property string $email
 * @property string $verifyfile
 */
class Tracker extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'trackers';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'project',
        'email',
        'verifyfile'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'project' => 'string',
        'email' => 'string',
        'verifyfile' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'project' => 'required',
        'email' => 'required',
        'verifyfile' => 'required'
    ];

    
}
