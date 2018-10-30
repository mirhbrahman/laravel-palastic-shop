<?php

namespace App\Repositories\Product;

use App\Models\Product\ProductSize;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class ProductSizeRepository
 * @package App\Repositories\Product
 * @version October 30, 2018, 2:09 pm UTC
 *
 * @method ProductSize findWithoutFail($id, $columns = ['*'])
 * @method ProductSize find($id, $columns = ['*'])
 * @method ProductSize first($columns = ['*'])
*/
class ProductSizeRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'size'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return ProductSize::class;
    }
}
