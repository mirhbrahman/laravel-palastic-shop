<?php

namespace App\Models\Product;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class ProductSize
 * @package App\Models\Product
 * @version October 30, 2018, 2:09 pm UTC
 *
 * @property string size
 */
class ProductSize extends Model
{
    use SoftDeletes;

    public $table = 'product_sizes';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'size'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'size' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
