<?php

namespace App\Http\Controllers\Product;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product\ProductCategory as ProductCategoryModel;
use App\Models\Product\ProductSubCategory as ProductSubCategoryModel;


class ProductSectionController extends Controller
{
    public function getCategory(Request $request)
    {
        $type_id = $request->type_id ? $request->type_id : 0;
        if ($type_id) {
            $cats = ProductCategoryModel::where('product_type_id', $type_id)->get()->toArray();
            return $cats;
        } else {
            return 'not ok';
        }
    }

    public function getSubCategory(Request $request)
    {
        $cat_id = $request->cat_id ? $request->cat_id : 0;
        if ($cat_id) {
            $sub_cats = ProductSubCategoryModel::where('product_category_id', $cat_id)->get()->toArray();
            return $sub_cats;
        } else {
            return 'not ok';
        }
    }
}
