<!-- Product Type Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('product_type_id', 'Product Type Id:') !!}
    {!! Form::select('product_type_id',[''=>'Please Select']+$product_types, null, ['class' => 'form-control']) !!}
</div>

<!-- Product Category Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('product_category_id', 'Product Category Id:') !!}
    {!! Form::select('product_category_id',[''=>'Please Select']+$product_categories, null, ['class' => 'form-control']) !!}
</div>

<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('product.productSubCategories.index') !!}" class="btn btn-default">Cancel</a>
</div>
