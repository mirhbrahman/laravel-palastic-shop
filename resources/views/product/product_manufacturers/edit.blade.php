@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Product Manufacturer
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($productManufacturer, ['route' => ['product.productManufacturers.update', $productManufacturer->id], 'method' => 'patch']) !!}

                        @include('product.product_manufacturers.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection