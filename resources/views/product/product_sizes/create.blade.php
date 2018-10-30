@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Product Size
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'product.productSizes.store']) !!}

                        @include('product.product_sizes.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
