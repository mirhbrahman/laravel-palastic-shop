<?php

namespace App\Models\Product;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Product
 * @package App\Models\Product
 * @version October 30, 2018, 6:07 pm UTC
 *
 * @property string code
 * @property integer product_type_id
 * @property integer product_category_id
 * @property integer product_sub_category_id
 * @property integer product_manufacturer_id
 * @property integer user_id
 * @property string name
 * @property string model
 * @property string key_features
 * @property string datails
 * @property string description
 * @property string dimension
 * @property string weight
 * @property string weight_unit
 * @property float price
 * @property integer quantity
 * @property integer quantity_low_limit
 * @property boolean is_feature
 * @property boolean is_special
 * @property float special_price
 * @property boolean special_status
 * @property boolean in_stock
 * @property boolean status
 */
class Product extends Model
{
    use SoftDeletes;

    public $table = 'products';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'code',
        'product_type_id',
        'product_category_id',
        'product_sub_category_id',
        'product_manufacturer_id',
        'user_id',
        'name',
        'model',
        'key_features',
        'datails',
        'description',
        'dimension',
        'weight',
        'weight_unit',
        'price',
        'quantity',
        'quantity_low_limit',
        'is_feature',
        'is_special',
        'special_price',
        'special_status',
        'in_stock',
        'status'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'code' => 'string',
        'product_type_id' => 'integer',
        'product_category_id' => 'integer',
        'product_sub_category_id' => 'integer',
        'product_manufacturer_id' => 'integer',
        'user_id' => 'integer',
        'name' => 'string',
        'model' => 'string',
        'key_features' => 'string',
        'datails' => 'string',
        'description' => 'string',
        'dimension' => 'string',
        'weight' => 'string',
        'weight_unit' => 'string',
        'price' => 'float',
        'quantity' => 'integer',
        'quantity_low_limit' => 'integer',
        'is_feature' => 'boolean',
        'is_special' => 'boolean',
        'special_price' => 'float',
        'special_status' => 'boolean',
        'in_stock' => 'boolean',
        'status' => 'boolean'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];
    
    public function user(){
        return $this->belongsTo('App\User');
    }

    // Single value
    public function product_type(){
        return $this->belongsTo('App\Models\Product\ProductType', 'product_type_id');
    }
    public function product_category(){
        return $this->belongsTo('App\Models\Product\ProductCategory', 'product_category_id');
    }
    public function product_sub_category(){
        return $this->belongsTo('App\Models\Product\ProductSubCategory', 'product_sub_category_id');
    }
    public function product_manufacturer(){
        return $this->belongsTo('App\Models\Product\ProductManufacturer', 'product_manufacturer_id');
    }

}
