<?php

namespace App\Http\Controllers\Product;

use App\Http\Requests\Product\CreateProductColorRequest;
use App\Http\Requests\Product\UpdateProductColorRequest;
use App\Repositories\Product\ProductColorRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class ProductColorController extends AppBaseController
{
    /** @var  ProductColorRepository */
    private $productColorRepository;

    public function __construct(ProductColorRepository $productColorRepo)
    {
        $this->productColorRepository = $productColorRepo;
    }

    /**
     * Display a listing of the ProductColor.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->productColorRepository->pushCriteria(new RequestCriteria($request));
        $productColors = $this->productColorRepository->all();

        return view('product.product_colors.index')
            ->with('productColors', $productColors);
    }

    /**
     * Show the form for creating a new ProductColor.
     *
     * @return Response
     */
    public function create()
    {
        return view('product.product_colors.create');
    }

    /**
     * Store a newly created ProductColor in storage.
     *
     * @param CreateProductColorRequest $request
     *
     * @return Response
     */
    public function store(CreateProductColorRequest $request)
    {
        $input = $request->all();

        $productColor = $this->productColorRepository->create($input);

        Flash::success('Product Color saved successfully.');

        return redirect(route('product.productColors.index'));
    }

    /**
     * Display the specified ProductColor.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $productColor = $this->productColorRepository->findWithoutFail($id);

        if (empty($productColor)) {
            Flash::error('Product Color not found');

            return redirect(route('product.productColors.index'));
        }

        return view('product.product_colors.show')->with('productColor', $productColor);
    }

    /**
     * Show the form for editing the specified ProductColor.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $productColor = $this->productColorRepository->findWithoutFail($id);

        if (empty($productColor)) {
            Flash::error('Product Color not found');

            return redirect(route('product.productColors.index'));
        }

        return view('product.product_colors.edit')->with('productColor', $productColor);
    }

    /**
     * Update the specified ProductColor in storage.
     *
     * @param  int              $id
     * @param UpdateProductColorRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateProductColorRequest $request)
    {
        $productColor = $this->productColorRepository->findWithoutFail($id);

        if (empty($productColor)) {
            Flash::error('Product Color not found');

            return redirect(route('product.productColors.index'));
        }

        $productColor = $this->productColorRepository->update($request->all(), $id);

        Flash::success('Product Color updated successfully.');

        return redirect(route('product.productColors.index'));
    }

    /**
     * Remove the specified ProductColor from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $productColor = $this->productColorRepository->findWithoutFail($id);

        if (empty($productColor)) {
            Flash::error('Product Color not found');

            return redirect(route('product.productColors.index'));
        }

        $this->productColorRepository->delete($id);

        Flash::success('Product Color deleted successfully.');

        return redirect(route('product.productColors.index'));
    }
}
