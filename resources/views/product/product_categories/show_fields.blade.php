
<!-- Product Type Id Field -->
<div class="form-group">
    {!! Form::label('product_type_id', 'Product Type:') !!}
    <p>{!! $productCategory->product_type->name !!}</p>
</div>

<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    <p>{!! $productCategory->name !!}</p>
</div>


