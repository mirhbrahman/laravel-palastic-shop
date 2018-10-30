<table class="table table-responsive" id="products-table">
    <thead>
        <tr>
            <th>Image</th>
            <th>Code</th>
            <th>Category</th>
            <th>Name</th>
            <th>Model</th>
            <th>Quantity</th>
            <th>Price</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($products as $product)
        <tr>
            <td>
                <img width="100px" src="{{ asset('imgs/default_'. rand(1, 3) . '.jpg') }}" alt="" srcset="">
            </td>
            <td>{!! $product->code !!}</td>
            <td>{!! $product->product_category->name !!}</td>
            <td>{!! $product->name !!}</td>
            <td>{!! $product->model !!}</td>
            <td>{!! $product->quantity !!}</td>
            <td>{!! $product->price !!}</td>
            <td>
                @if ($product->status == 1)
                <i class="fa fa-check-square text-green"></i>
                @else
                <i class="fa fa-times-circle text-red"></i>
                @endif
            </td>
            <td>
                {!! Form::open(['route' => ['product.products.destroy', $product->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('product.products.show', [$product->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('product.products.edit', [$product->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>