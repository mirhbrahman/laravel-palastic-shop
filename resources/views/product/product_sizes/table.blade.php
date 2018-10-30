<table class="table table-responsive" id="productSizes-table">
    <thead>
        <tr>
            <th>Size</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($productSizes as $productSize)
        <tr>
            <td>{!! $productSize->size !!}</td>
            <td>
                {!! Form::open(['route' => ['product.productSizes.destroy', $productSize->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('product.productSizes.show', [$productSize->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('product.productSizes.edit', [$productSize->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>