<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Blog
 * @package App\Models
 * @version January 6, 2018, 9:33 am UTC
 *
 * @property string title
 * @property string brief
 * @property longText description
 * @property integer status
 */
class Blog extends Model
{
    use SoftDeletes;

    public $table = 'blogs';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'title',
        'brief',
        'description',
        'status'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'title' => 'string',
        'brief' => 'string',
        'status' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'title' => 'required|string',
        'brief' => 'required|string',
        'description' => 'required|string',
        'status' => 'required|numeric'
    ];

    
}
