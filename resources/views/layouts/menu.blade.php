{{-- All menus goes here --}}<li class="{{ Request::is('productTypes*') ? 'active' : '' }}">
    <a href="{!! route('product.productTypes.index') !!}"><i class="fa fa-edit"></i><span>Product Types</span></a>
</li>

<li class="{{ Request::is('productCategories*') ? 'active' : '' }}">
    <a href="{!! route('product.productCategories.index') !!}"><i class="fa fa-edit"></i><span>Product Categories</span></a>
</li>

<li class="{{ Request::is('productSubCategories*') ? 'active' : '' }}">
    <a href="{!! route('product.productSubCategories.index') !!}"><i class="fa fa-edit"></i><span>Product Sub Categories</span></a>
</li>

