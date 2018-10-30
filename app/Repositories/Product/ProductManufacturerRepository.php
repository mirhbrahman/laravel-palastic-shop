<?php

namespace App\Repositories\Product;

use App\Models\Product\ProductManufacturer;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class ProductManufacturerRepository
 * @package App\Repositories\Product
 * @version October 30, 2018, 2:07 pm UTC
 *
 * @method ProductManufacturer findWithoutFail($id, $columns = ['*'])
 * @method ProductManufacturer find($id, $columns = ['*'])
 * @method ProductManufacturer first($columns = ['*'])
*/
class ProductManufacturerRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'url'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return ProductManufacturer::class;
    }
}
