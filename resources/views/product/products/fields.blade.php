<!-- Code Field -->
<div class="form-group col-sm-6">
    {!! Form::label('code', 'Code:') !!}
    {!! Form::text('code', null, ['class' => 'form-control']) !!}
</div>

<!-- Product Type Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('product_type_id', 'Product Type Id:') !!}
    {!! Form::number('product_type_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Product Category Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('product_category_id', 'Product Category Id:') !!}
    {!! Form::number('product_category_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Product Sub Category Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('product_sub_category_id', 'Product Sub Category Id:') !!}
    {!! Form::number('product_sub_category_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Product Manufacturer Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('product_manufacturer_id', 'Product Manufacturer Id:') !!}
    {!! Form::number('product_manufacturer_id', null, ['class' => 'form-control']) !!}
</div>

<!-- User Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('user_id', 'User Id:') !!}
    {!! Form::number('user_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Model Field -->
<div class="form-group col-sm-6">
    {!! Form::label('model', 'Model:') !!}
    {!! Form::text('model', null, ['class' => 'form-control']) !!}
</div>

<!-- Key Features Field -->
<div class="form-group col-sm-6">
    {!! Form::label('key_features', 'Key Features:') !!}
    {!! Form::text('key_features', null, ['class' => 'form-control']) !!}
</div>

<!-- Datails Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('datails', 'Datails:') !!}
    {!! Form::textarea('datails', null, ['class' => 'form-control']) !!}
</div>

<!-- Description Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('description', 'Description:') !!}
    {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
</div>

<!-- Dimension Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('dimension', 'Dimension:') !!}
    {!! Form::textarea('dimension', null, ['class' => 'form-control']) !!}
</div>

<!-- Weight Field -->
<div class="form-group col-sm-6">
    {!! Form::label('weight', 'Weight:') !!}
    {!! Form::text('weight', null, ['class' => 'form-control']) !!}
</div>

<!-- Weight Unit Field -->
<div class="form-group col-sm-6">
    {!! Form::label('weight_unit', 'Weight Unit:') !!}
    {!! Form::text('weight_unit', null, ['class' => 'form-control']) !!}
</div>

<!-- Price Field -->
<div class="form-group col-sm-6">
    {!! Form::label('price', 'Price:') !!}
    {!! Form::number('price', null, ['class' => 'form-control']) !!}
</div>

<!-- Quantity Field -->
<div class="form-group col-sm-6">
    {!! Form::label('quantity', 'Quantity:') !!}
    {!! Form::number('quantity', null, ['class' => 'form-control']) !!}
</div>

<!-- Quantity Low Limit Field -->
<div class="form-group col-sm-6">
    {!! Form::label('quantity_low_limit', 'Quantity Low Limit:') !!}
    {!! Form::number('quantity_low_limit', null, ['class' => 'form-control']) !!}
</div>

<!-- Is Feature Field -->
<div class="form-group col-sm-6">
    {!! Form::label('is_feature', 'Is Feature:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('is_feature', false) !!}
        {!! Form::checkbox('is_feature', '1', null) !!} 1
    </label>
</div>

<!-- Is Special Field -->
<div class="form-group col-sm-6">
    {!! Form::label('is_special', 'Is Special:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('is_special', false) !!}
        {!! Form::checkbox('is_special', '1', null) !!} 1
    </label>
</div>

<!-- Special Price Field -->
<div class="form-group col-sm-6">
    {!! Form::label('special_price', 'Special Price:') !!}
    {!! Form::number('special_price', null, ['class' => 'form-control']) !!}
</div>

<!-- Special Status Field -->
<div class="form-group col-sm-6">
    {!! Form::label('special_status', 'Special Status:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('special_status', false) !!}
        {!! Form::checkbox('special_status', '1', null) !!} 1
    </label>
</div>

<!-- In Stock Field -->
<div class="form-group col-sm-6">
    {!! Form::label('in_stock', 'In Stock:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('in_stock', false) !!}
        {!! Form::checkbox('in_stock', '1', null) !!} 1
    </label>
</div>

<!-- Status Field -->
<div class="form-group col-sm-6">
    {!! Form::label('status', 'Status:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('status', false) !!}
        {!! Form::checkbox('status', '1', null) !!} 1
    </label>
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('product.products.index') !!}" class="btn btn-default">Cancel</a>
</div>
