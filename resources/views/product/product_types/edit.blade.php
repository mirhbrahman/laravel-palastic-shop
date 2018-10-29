@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Product Type
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($productType, ['route' => ['product.productTypes.update', $productType->id], 'method' => 'patch']) !!}

                        @include('product.product_types.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection