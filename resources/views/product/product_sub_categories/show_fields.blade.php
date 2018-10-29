
<!-- Product Type Id Field -->
<div class="form-group">
    {!! Form::label('product_type_id', 'Product Type:') !!}
    <p>{!! $productSubCategory->product_type->name !!}</p>
</div>

<!-- Product Category Id Field -->
<div class="form-group">
    {!! Form::label('product_category_id', 'Product Category:') !!}
    <p>{!! $productSubCategory->product_category->name !!}</p>
</div>

<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    <p>{!! $productSubCategory->name !!}</p>
</div>


