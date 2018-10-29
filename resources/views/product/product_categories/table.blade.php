<table class="table table-responsive" id="productCategories-table">
    <thead>
        <tr>
            <th>Product Type</th>
            <th>Name</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($productCategories as $productCategory)
        <tr>
            <td>{!! $productCategory->product_type->name !!}</td>
            <td>{!! $productCategory->name !!}</td>
            <td>
                {!! Form::open(['route' => ['product.productCategories.destroy', $productCategory->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('product.productCategories.show', [$productCategory->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('product.productCategories.edit', [$productCategory->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>