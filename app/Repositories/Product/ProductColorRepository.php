<?php

namespace App\Repositories\Product;

use App\Models\Product\ProductColor;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class ProductColorRepository
 * @package App\Repositories\Product
 * @version October 30, 2018, 2:05 pm UTC
 *
 * @method ProductColor findWithoutFail($id, $columns = ['*'])
 * @method ProductColor find($id, $columns = ['*'])
 * @method ProductColor first($columns = ['*'])
*/
class ProductColorRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'color_code',
        'pantone_code'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return ProductColor::class;
    }
}
