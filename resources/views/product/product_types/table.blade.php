<table class="table table-responsive" id="productTypes-table">
    <thead>
        <tr>
            <th>Name</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($productTypes as $productType)
        <tr>
            <td>{!! $productType->name !!}</td>
            <td>
                {!! Form::open(['route' => ['product.productTypes.destroy', $productType->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('product.productTypes.show', [$productType->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('product.productTypes.edit', [$productType->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>