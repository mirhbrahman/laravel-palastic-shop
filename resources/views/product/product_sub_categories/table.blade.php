<table class="table table-responsive" id="productSubCategories-table">
    <thead>
        <tr>
            <th>Product Type Id</th>
            <th>Product Category Id</th>
            <th>Name</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($productSubCategories as $productSubCategory)
        <tr>
            <td>{!! $productSubCategory->product_type->name !!}</td>
            <td>{!! $productSubCategory->product_category->name !!}</td>
            <td>{!! $productSubCategory->name !!}</td>
            <td>
                {!! Form::open(['route' => ['product.productSubCategories.destroy', $productSubCategory->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('product.productSubCategories.show', [$productSubCategory->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('product.productSubCategories.edit', [$productSubCategory->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>