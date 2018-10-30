<?php

namespace App\Repositories\Product;

use App\Models\Product\Product;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class ProductRepository
 * @package App\Repositories\Product
 * @version October 30, 2018, 6:07 pm UTC
 *
 * @method Product findWithoutFail($id, $columns = ['*'])
 * @method Product find($id, $columns = ['*'])
 * @method Product first($columns = ['*'])
*/
class ProductRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
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
     * Configure the Model
     **/
    public function model()
    {
        return Product::class;
    }
}
