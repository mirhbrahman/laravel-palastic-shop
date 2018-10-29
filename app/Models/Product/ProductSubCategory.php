<?php

namespace App\Models\Product;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class ProductSubCategory
 * @package App\Models\Product
 * @version October 29, 2018, 1:01 pm UTC
 *
 * @property integer product_type_id
 * @property integer product_category_id
 * @property string name
 */
class ProductSubCategory extends Model
{
    use SoftDeletes;

    public $table = 'product_sub_categories';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'product_type_id',
        'product_category_id',
        'name'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'product_type_id' => 'integer',
        'product_category_id' => 'integer',
        'name' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    public function product_type(){
        return $this->belongsTo('App\Models\Product\ProductType', 'product_type_id');
    }

    public function product_category(){
        return $this->belongsTo('App\Models\Product\ProductCategory', 'product_category_id');
    }
    
}
