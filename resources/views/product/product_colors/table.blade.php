<table class="table table-responsive" id="productColors-table">
    <thead>
        <tr>
            <th>Name</th>
        <th>Color Code</th>
        <th>Pantone Code</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($productColors as $productColor)
        <tr>
            <td>{!! $productColor->name !!}</td>
            <td>{!! $productColor->color_code !!}</td>
            <td>{!! $productColor->pantone_code !!}</td>
            <td>
                {!! Form::open(['route' => ['product.productColors.destroy', $productColor->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('product.productColors.show', [$productColor->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('product.productColors.edit', [$productColor->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>