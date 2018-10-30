<?php

namespace App\Models\Product;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class ProductManufacturer
 * @package App\Models\Product
 * @version October 30, 2018, 2:07 pm UTC
 *
 * @property string name
 * @property string url
 */
class ProductManufacturer extends Model
{
    use SoftDeletes;

    public $table = 'product_manufacturers';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'name',
        'url'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'url' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
