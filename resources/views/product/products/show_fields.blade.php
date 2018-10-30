<style>
    label{
        float: left;
        margin-right: 10px;
        font-weight: bold;
        color: royalblue;
    }
    p{
        font-weight: normal;
    }
</style>
<div class="col-md-6">
    <!-- Code Field -->
    <div class="form-group">
        {!! Form::label('code', 'Product Code:') !!}
        <p>{!! $product->code !!}</p>
    </div>

    <!-- Name Field -->
    <div class="form-group">
        {!! Form::label('name', 'Product Name:') !!}
        <p>{!! $product->name !!}</p>
    </div>
    <!-- Product Type Id Field -->
    <div class="form-group">
        {!! Form::label('product_type_id', 'Product Type:') !!}
        <p>{!! $product->product_type->name !!}</p>
    </div>

    <!-- Product Category Id Field -->
    <div class="form-group">
        {!! Form::label('product_category_id', 'Product Category:') !!}
        <p>{!! $product->product_category->name !!}</p>
    </div>

    <!-- Product Sub Category Id Field -->
    <div class="form-group">
        {!! Form::label('product_sub_category_id', 'Product Sub Category:') !!}
        <p>{!! $product->product_sub_category->name !!}</p>
    </div>

    <!-- Product Manufacturer Id Field -->
    <div class="form-group">
        {!! Form::label('product_manufacturer_id', 'Product Manufacturer:') !!}
        <p>{!! $product->product_manufacturer->name !!}</p>
    </div>

    <!-- User Id Field -->
    <div class="form-group">
        {!! Form::label('user_id', 'Product Owner:') !!}
        <p>{!! $product->user->name !!}</p>
    </div>


    <!-- Model Field -->
    <div class="form-group">
        {!! Form::label('model', 'Product Model:') !!}
        <p>{!! $product->model !!}</p>
    </div>

    <!-- Key Features Field -->
    <div class="form-group">
        {!! Form::label('key_features', 'Key Features:') !!}
        <p>{!! $product->key_features !!}</p>
    </div>

    <!-- Datails Field -->
    <div class="form-group">
        {!! Form::label('datails', 'Datails:') !!}
        <p>{!! $product->datails !!}</p>
    </div>

    <!-- Description Field -->
    <div class="form-group">
        {!! Form::label('description', 'Description:') !!}
        <p>{!! $product->description !!}</p>
    </div>

</div>
<div class="col-md-6">
    <!-- Dimension Field -->
    <div class="form-group">
        {!! Form::label('dimension', 'Dimension:') !!}
        <p>{!! $product->dimension !!}</p>
    </div>

    <!-- Weight Field -->
    <div class="form-group">
        {!! Form::label('weight', 'Weight:') !!}
        <p>{!! $product->weight !!}</p>
    </div>

    <!-- Weight Unit Field -->
    <div class="form-group">
        {!! Form::label('weight_unit', 'Weight Unit:') !!}
        <p>{!! $product->weight_unit !!}</p>
    </div>

    <!-- Price Field -->
    <div class="form-group">
        {!! Form::label('price', 'Price:') !!}
        <p>{!! $product->price !!}</p>
    </div>

    <!-- Quantity Field -->
    <div class="form-group">
        {!! Form::label('quantity', 'Quantity:') !!}
        <p>{!! $product->quantity !!}</p>
    </div>

    <!-- Quantity Low Limit Field -->
    <div class="form-group">
        {!! Form::label('quantity_low_limit', 'Quantity Low Limit:') !!}
        <p>{!! $product->quantity_low_limit !!}</p>
    </div>

    <!-- Is Feature Field -->
    <div class="form-group">
        {!! Form::label('is_feature', 'Is Feature:') !!}
        <p>
            @if ($product->is_feature == 1)
            <i class="fa fa-check-square text-green"></i> @else
            <i class="fa fa-times-circle text-red"></i> @endif
        </p>
    </div>

    <!-- Is Special Field -->
    <div class="form-group">
        {!! Form::label('is_special', 'Is Special:') !!}
        <p>
            @if ($product->is_special == 1)
            <i class="fa fa-check-square text-green"></i> @else
            <i class="fa fa-times-circle text-red"></i> @endif
        </p>
    </div>

    <!-- Special Price Field -->
    <div class="form-group">
        {!! Form::label('special_price', 'Special Price:') !!}
        <p>{!! $product->special_price !!}</p>
    </div>

    <!-- Special Status Field -->
    <div class="form-group">
        {!! Form::label('special_status', 'Special Status:') !!}
        <p>{!! $product->special_status ? 'Active' : 'Inactive' !!}</p>
    </div>

    <!-- In Stock Field -->
    <div class="form-group">
        {!! Form::label('in_stock', 'In Stock:') !!}
        <p>
            @if ($product->is_stock == 1)
            <i class="fa fa-check-square text-green"></i> @else
            <i class="fa fa-times-circle text-red"></i> @endif
        </p>
    </div>

    <!-- Status Field -->
    <div class="form-group">
        {!! Form::label('status', 'Status:') !!}
        <p>{!! $product->status ? 'Active' : 'Inactive' !!}</p>
    </div>


    <!-- Created At Field -->
    <div class="form-group">
        {!! Form::label('created_at', 'Created At:') !!}
        <p>{!! $product->created_at->format('D d, M, Y h:i') !!}</p>
    </div>

</div>