<?php

namespace App\Http\Controllers\Product;

use App\Http\Requests\Product\CreateProductSizeRequest;
use App\Http\Requests\Product\UpdateProductSizeRequest;
use App\Repositories\Product\ProductSizeRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class ProductSizeController extends AppBaseController
{
    /** @var  ProductSizeRepository */
    private $productSizeRepository;

    public function __construct(ProductSizeRepository $productSizeRepo)
    {
        $this->productSizeRepository = $productSizeRepo;
    }

    /**
     * Display a listing of the ProductSize.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->productSizeRepository->pushCriteria(new RequestCriteria($request));
        $productSizes = $this->productSizeRepository->all();

        return view('product.product_sizes.index')
            ->with('productSizes', $productSizes);
    }

    /**
     * Show the form for creating a new ProductSize.
     *
     * @return Response
     */
    public function create()
    {
        return view('product.product_sizes.create');
    }

    /**
     * Store a newly created ProductSize in storage.
     *
     * @param CreateProductSizeRequest $request
     *
     * @return Response
     */
    public function store(CreateProductSizeRequest $request)
    {
        $input = $request->all();

        $productSize = $this->productSizeRepository->create($input);

        Flash::success('Product Size saved successfully.');

        return redirect(route('product.productSizes.index'));
    }

    /**
     * Display the specified ProductSize.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $productSize = $this->productSizeRepository->findWithoutFail($id);

        if (empty($productSize)) {
            Flash::error('Product Size not found');

            return redirect(route('product.productSizes.index'));
        }

        return view('product.product_sizes.show')->with('productSize', $productSize);
    }

    /**
     * Show the form for editing the specified ProductSize.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $productSize = $this->productSizeRepository->findWithoutFail($id);

        if (empty($productSize)) {
            Flash::error('Product Size not found');

            return redirect(route('product.productSizes.index'));
        }

        return view('product.product_sizes.edit')->with('productSize', $productSize);
    }

    /**
     * Update the specified ProductSize in storage.
     *
     * @param  int              $id
     * @param UpdateProductSizeRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateProductSizeRequest $request)
    {
        $productSize = $this->productSizeRepository->findWithoutFail($id);

        if (empty($productSize)) {
            Flash::error('Product Size not found');

            return redirect(route('product.productSizes.index'));
        }

        $productSize = $this->productSizeRepository->update($request->all(), $id);

        Flash::success('Product Size updated successfully.');

        return redirect(route('product.productSizes.index'));
    }

    /**
     * Remove the specified ProductSize from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $productSize = $this->productSizeRepository->findWithoutFail($id);

        if (empty($productSize)) {
            Flash::error('Product Size not found');

            return redirect(route('product.productSizes.index'));
        }

        $this->productSizeRepository->delete($id);

        Flash::success('Product Size deleted successfully.');

        return redirect(route('product.productSizes.index'));
    }
}
