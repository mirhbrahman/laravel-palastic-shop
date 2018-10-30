{{-- All menus goes here --}}

<li class="treeview">
    <a href="#">
      <i class="fa fa-pie-chart"></i>
      <span>User</span>
      <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
      </span>
    </a>
    <ul class="treeview-menu" style="display: none;">
        <li class="{{ Request::is('productSizes*') ? 'active' : '' }}">
            <a href="{!! route('user.create') !!}"><i class="fa fa-edit"></i><span>Create user</span></a>
        </li>
        <li class="{{ Request::is('productSizes*') ? 'active' : '' }}">
            <a href="{!! route('user.index') !!}"><i class="fa fa-edit"></i><span>All user</span></a>
        </li>
        <li class="{{ Request::is('productSizes*') ? 'active' : '' }}">
            <a href="{!! route('setting') !!}"><i class="fa fa-edit"></i><span>Setting</span></a>
        </li>
    </ul>
</li>

<li class="treeview">
    <a href="#">
          <i class="fa fa-pie-chart"></i>
          <span>Product  Section</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
    <ul class="treeview-menu" style="display: none;">
        <li class="{{ Request::is('productTypes*') ? 'active' : '' }}">
            <a href="{!! route('product.productTypes.index') !!}"><i class="fa fa-edit"></i><span>Product Types</span></a>
        </li>

        <li class="{{ Request::is('productCategories*') ? 'active' : '' }}">
            <a href="{!! route('product.productCategories.index') !!}"><i class="fa fa-edit"></i><span>Product Categories</span></a>
        </li>

        <li class="{{ Request::is('productSubCategories*') ? 'active' : '' }}">
            <a href="{!! route('product.productSubCategories.index') !!}"><i class="fa fa-edit"></i><span>Product Sub Categories</span></a>
        </li>
    </ul>
</li>



<li class="treeview">
    <a href="#">
          <i class="fa fa-pie-chart"></i>
          <span>Product Accessorise</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
    <ul class="treeview-menu" style="display: none;">
        <li class="{{ Request::is('productManufacturers*') ? 'active' : '' }}">
            <a href="{!! route('product.productManufacturers.index') !!}"><i class="fa fa-edit"></i><span>Product Manufacturers</span></a>
        </li>

        <li class="{{ Request::is('productColors*') ? 'active' : '' }}">
            <a href="{!! route('product.productColors.index') !!}"><i class="fa fa-edit"></i><span>Product Colors</span></a>
        </li>
        <li class="{{ Request::is('productSizes*') ? 'active' : '' }}">
            <a href="{!! route('product.productSizes.index') !!}"><i class="fa fa-edit"></i><span>Product Sizes</span></a>
        </li>

    </ul>
</li>
<li class="{{ Request::is('products*') ? 'active' : '' }}">
    <a href="{!! route('product.products.index') !!}"><i class="fa fa-edit"></i><span>Products</span></a>
</li>