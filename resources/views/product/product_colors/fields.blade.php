<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Color Code Field -->
<div class="form-group col-sm-6">
    {!! Form::label('color_code', 'Color Code:') !!}
    {!! Form::text('color_code', null, ['class' => 'form-control']) !!}
</div>

<!-- Pantone Code Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pantone_code', 'Pantone Code:') !!}
    {!! Form::text('pantone_code', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('product.productColors.index') !!}" class="btn btn-default">Cancel</a>
</div>
