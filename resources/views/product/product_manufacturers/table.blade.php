<table class="table table-responsive" id="productManufacturers-table">
    <thead>
        <tr>
            <th>Name</th>
        <th>Url</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($productManufacturers as $productManufacturer)
        <tr>
            <td>{!! $productManufacturer->name !!}</td>
            <td>{!! $productManufacturer->url !!}</td>
            <td>
                {!! Form::open(['route' => ['product.productManufacturers.destroy', $productManufacturer->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('product.productManufacturers.show', [$productManufacturer->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('product.productManufacturers.edit', [$productManufacturer->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>