<?php

namespace App\Models\Product;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class ProductCategory
 * @package App\Models\Product
 * @version October 29, 2018, 12:58 pm UTC
 *
 * @property integer product_type_id
 * @property string name
 */
class ProductCategory extends Model
{
    use SoftDeletes;

    public $table = 'product_categories';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'product_type_id',
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

    public function product_sub_categories(){
        return $this->hasMany('App\Models\Product\ProductSubCategory', 'product_category_id');
    }
    public function products(){
        return $this->hasMany('App\Models\Product\Product', 'product_category_id');
    }
}
