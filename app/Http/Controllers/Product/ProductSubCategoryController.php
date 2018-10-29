<?php

namespace App\Http\Controllers\Product;

use App\Http\Requests\Product\CreateProductSubCategoryRequest;
use App\Http\Requests\Product\UpdateProductSubCategoryRequest;
use App\Repositories\Product\ProductSubCategoryRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use App\Models\Product\ProductType as ProductTypeModel;
use App\Models\Product\ProductCategory as ProductCategoryModel;

class ProductSubCategoryController extends AppBaseController
{
    /** @var  ProductSubCategoryRepository */
    private $productSubCategoryRepository;

    public function __construct(ProductSubCategoryRepository $productSubCategoryRepo)
    {
        $this->productSubCategoryRepository = $productSubCategoryRepo;
    }

    /**
     * Display a listing of the ProductSubCategory.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->productSubCategoryRepository->pushCriteria(new RequestCriteria($request));
        $productSubCategories = $this->productSubCategoryRepository->all();

        return view('product.product_sub_categories.index')
            ->with('productSubCategories', $productSubCategories);
    }

    /**
     * Show the form for creating a new ProductSubCategory.
     *
     * @return Response
     */
    public function create()
    {
        return view('product.product_sub_categories.create')
        ->with('product_types', ProductTypeModel::pluck('name','id')->toArray())
        ->with('product_categories', ProductCategoryModel::pluck('name','id')->toArray());
    }

    /**
     * Store a newly created ProductSubCategory in storage.
     *
     * @param CreateProductSubCategoryRequest $request
     *
     * @return Response
     */
    public function store(CreateProductSubCategoryRequest $request)
    {
        $input = $request->all();

        $productSubCategory = $this->productSubCategoryRepository->create($input);

        Flash::success('Product Sub Category saved successfully.');

        return redirect(route('product.productSubCategories.index'));
    }

    /**
     * Display the specified ProductSubCategory.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $productSubCategory = $this->productSubCategoryRepository->findWithoutFail($id);

        if (empty($productSubCategory)) {
            Flash::error('Product Sub Category not found');

            return redirect(route('product.productSubCategories.index'));
        }

        return view('product.product_sub_categories.show')->with('productSubCategory', $productSubCategory);
    }

    /**
     * Show the form for editing the specified ProductSubCategory.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $productSubCategory = $this->productSubCategoryRepository->findWithoutFail($id);

        if (empty($productSubCategory)) {
            Flash::error('Product Sub Category not found');

            return redirect(route('product.productSubCategories.index'));
        }

        return view('product.product_sub_categories.edit')
        ->with('productSubCategory', $productSubCategory)
        ->with('product_types', ProductTypeModel::pluck('name','id')->toArray())
        ->with('product_categories', ProductCategoryModel::pluck('name','id')->toArray());
    }

    /**
     * Update the specified ProductSubCategory in storage.
     *
     * @param  int              $id
     * @param UpdateProductSubCategoryRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateProductSubCategoryRequest $request)
    {
        $productSubCategory = $this->productSubCategoryRepository->findWithoutFail($id);

        if (empty($productSubCategory)) {
            Flash::error('Product Sub Category not found');

            return redirect(route('product.productSubCategories.index'));
        }

        $productSubCategory = $this->productSubCategoryRepository->update($request->all(), $id);

        Flash::success('Product Sub Category updated successfully.');

        return redirect(route('product.productSubCategories.index'));
    }

    /**
     * Remove the specified ProductSubCategory from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $productSubCategory = $this->productSubCategoryRepository->findWithoutFail($id);

        if (empty($productSubCategory)) {
            Flash::error('Product Sub Category not found');

            return redirect(route('product.productSubCategories.index'));
        }

        $this->productSubCategoryRepository->delete($id);

        Flash::success('Product Sub Category deleted successfully.');

        return redirect(route('product.productSubCategories.index'));
    }
}
