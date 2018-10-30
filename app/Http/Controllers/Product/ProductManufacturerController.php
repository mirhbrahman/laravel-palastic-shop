<?php

namespace App\Http\Controllers\Product;

use App\Http\Requests\Product\CreateProductManufacturerRequest;
use App\Http\Requests\Product\UpdateProductManufacturerRequest;
use App\Repositories\Product\ProductManufacturerRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class ProductManufacturerController extends AppBaseController
{
    /** @var  ProductManufacturerRepository */
    private $productManufacturerRepository;

    public function __construct(ProductManufacturerRepository $productManufacturerRepo)
    {
        $this->productManufacturerRepository = $productManufacturerRepo;
    }

    /**
     * Display a listing of the ProductManufacturer.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->productManufacturerRepository->pushCriteria(new RequestCriteria($request));
        $productManufacturers = $this->productManufacturerRepository->all();

        return view('product.product_manufacturers.index')
            ->with('productManufacturers', $productManufacturers);
    }

    /**
     * Show the form for creating a new ProductManufacturer.
     *
     * @return Response
     */
    public function create()
    {
        return view('product.product_manufacturers.create');
    }

    /**
     * Store a newly created ProductManufacturer in storage.
     *
     * @param CreateProductManufacturerRequest $request
     *
     * @return Response
     */
    public function store(CreateProductManufacturerRequest $request)
    {
        $input = $request->all();

        $productManufacturer = $this->productManufacturerRepository->create($input);

        Flash::success('Product Manufacturer saved successfully.');

        return redirect(route('product.productManufacturers.index'));
    }

    /**
     * Display the specified ProductManufacturer.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $productManufacturer = $this->productManufacturerRepository->findWithoutFail($id);

        if (empty($productManufacturer)) {
            Flash::error('Product Manufacturer not found');

            return redirect(route('product.productManufacturers.index'));
        }

        return view('product.product_manufacturers.show')->with('productManufacturer', $productManufacturer);
    }

    /**
     * Show the form for editing the specified ProductManufacturer.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $productManufacturer = $this->productManufacturerRepository->findWithoutFail($id);

        if (empty($productManufacturer)) {
            Flash::error('Product Manufacturer not found');

            return redirect(route('product.productManufacturers.index'));
        }

        return view('product.product_manufacturers.edit')->with('productManufacturer', $productManufacturer);
    }

    /**
     * Update the specified ProductManufacturer in storage.
     *
     * @param  int              $id
     * @param UpdateProductManufacturerRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateProductManufacturerRequest $request)
    {
        $productManufacturer = $this->productManufacturerRepository->findWithoutFail($id);

        if (empty($productManufacturer)) {
            Flash::error('Product Manufacturer not found');

            return redirect(route('product.productManufacturers.index'));
        }

        $productManufacturer = $this->productManufacturerRepository->update($request->all(), $id);

        Flash::success('Product Manufacturer updated successfully.');

        return redirect(route('product.productManufacturers.index'));
    }

    /**
     * Remove the specified ProductManufacturer from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $productManufacturer = $this->productManufacturerRepository->findWithoutFail($id);

        if (empty($productManufacturer)) {
            Flash::error('Product Manufacturer not found');

            return redirect(route('product.productManufacturers.index'));
        }

        $this->productManufacturerRepository->delete($id);

        Flash::success('Product Manufacturer deleted successfully.');

        return redirect(route('product.productManufacturers.index'));
    }
}
