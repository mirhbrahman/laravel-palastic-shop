<?php

namespace App\Models\Product;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class ProductColor
 * @package App\Models\Product
 * @version October 30, 2018, 2:05 pm UTC
 *
 * @property string name
 * @property string color_code
 * @property string pantone_code
 */
class ProductColor extends Model
{
    use SoftDeletes;

    public $table = 'product_colors';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'name',
        'color_code',
        'pantone_code'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'color_code' => 'string',
        'pantone_code' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
