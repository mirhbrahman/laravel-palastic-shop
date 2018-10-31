<?php

namespace App\Http\ViewComposers;

use Illuminate\View\View;
use App\Models\Product\Product;
use App\Models\Product\ProductCategory;

class FrontLayoutComposer
{
    /**
     * The user repository implementation.
     *
     * @var UserRepository
     */
    protected $product_categories;
    protected $feature_products;

    /**
     * Create a new profile composer.
     *
     * @param  UserRepository  $users
     * @return void
     */
    public function __construct()
    {
        // Dependencies automatically resolved by service container...
        $this->product_categories = ProductCategory::all();
        $this->feature_products = Product::where('is_feature', 1)
            ->orderBy('created_at', 'desc')
            ->limit(6)
            ->get();
    }

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $view->with('product_categories', $this->product_categories)
        ->with('feature_products', $this->feature_products);
    }
}