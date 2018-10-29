<?php

namespace App\Repositories\Product;

use App\Models\Product\ProductSubCategory;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class ProductSubCategoryRepository
 * @package App\Repositories\Product
 * @version October 29, 2018, 1:01 pm UTC
 *
 * @method ProductSubCategory findWithoutFail($id, $columns = ['*'])
 * @method ProductSubCategory find($id, $columns = ['*'])
 * @method ProductSubCategory first($columns = ['*'])
*/
class ProductSubCategoryRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'product_type_id',
        'product_category_id',
        'name'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return ProductSubCategory::class;
    }
}
