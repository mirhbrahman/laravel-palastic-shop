<div class="form-group col-sm-6">
    <label for="">Product Type</label>
    <select name="product_type_id" id="type" class="form-control" onchange="get_category(this.value);">
            <option value="">Please select</option>
                @if ($product_types)
                    @foreach ($product_types as $type)
                        <option value="{{ $type->id }}">{{ ucwords($type->name) }}</option>
                    @endforeach
                @endif
        </select>
</div>



<div class="form-group col-sm-6">
    <label for="">Product Category</label>
    <select name="product_category_id" id="category" class="form-control">
            <option value="">Please select</option>
        </select>
</div>

<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!} {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('product.productSubCategories.index') !!}" class="btn btn-default">Cancel</a>
</div>


@section('scripts')
    @include('includes.ajaxs.productSectionAjaxScript')
@endsection