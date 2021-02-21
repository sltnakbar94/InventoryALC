<!-- This file is used to store sidebar items, starting with Backpack\Base 0.9.0 -->
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('dashboard') }}"><i class="la la-home nav-icon"></i> {{ trans('backpack::base.dashboard') }}</a></li>
<li class="nav-item nav-dropdown">
    <a class="nav-link nav-dropdown-toggle" href="#"><i class="nav-icon fa fa-cog"></i> In Bound</a>
	<ul class="nav-dropdown-items">
        <li class='nav-item'><a class='nav-link' href='{{ backpack_url('salesorder') }}'><i class='nav-icon la la-question'></i> SalesOrders</a></li>
        <li class='nav-item'><a class='nav-link' href='{{ backpack_url('warehousein') }}'><i class='nav-icon la la-question'></i> Purchase Order</a></li>
    </ul>
</li>
<li class="nav-item nav-dropdown">
    <a class="nav-link nav-dropdown-toggle" href="#"><i class="nav-icon fa fa-cog"></i> Out Bound</a>
	<ul class="nav-dropdown-items">
        <li class='nav-item'><a class='nav-link' href='{{ backpack_url('warehouseout') }}'><i class='nav-icon la la-question'></i> Delivery Order</a></li>
    </ul>
</li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('deliverynote') }}'><i class='nav-icon la la-question'></i> DeliveryNotes</a></li>
<li class="nav-item nav-dropdown">
    <a class="nav-link nav-dropdown-toggle" href="#"><i class="nav-icon fa fa-cog"></i> Config</a>
	<ul class="nav-dropdown-items">
        <li class='nav-item'><a class='nav-link' href='{{ backpack_url('item') }}'><i class='nav-icon la la-question'></i> Items</a></li>
        <li class='nav-item'><a class='nav-link' href='{{ backpack_url('category') }}'><i class='nav-icon la la-question'></i> Categories</a></li>
        <li class='nav-item'><a class='nav-link' href='{{ backpack_url('brand') }}'><i class='nav-icon la la-question'></i> Brands</a></li>
        <li class='nav-item'><a class='nav-link' href='{{ backpack_url('unit') }}'><i class='nav-icon la la-question'></i> Units</a></li>
        <li class='nav-item'><a class='nav-link' href='{{ backpack_url('company') }}'><i class='nav-icon la la-question'></i> Companies</a></li>
        <li class='nav-item'><a class='nav-link' href='{{ backpack_url('stackholder') }}'><i class='nav-icon la la-question'></i> Stackholders</a></li>
        <li class="nav-item nav-dropdown">
            <a class="nav-link nav-dropdown-toggle" href="#"><i class="nav-icon la la-users"></i> Authentication</a>
            <ul class="nav-dropdown-items">
            <li class="nav-item"><a class="nav-link" href="{{ backpack_url('user') }}"><i class="nav-icon la la-user"></i> <span>Users</span></a></li>
            <li class="nav-item"><a class="nav-link" href="{{ backpack_url('role') }}"><i class="nav-icon la la-id-badge"></i> <span>Roles</span></a></li>
            <li class="nav-item"><a class="nav-link" href="{{ backpack_url('permission') }}"><i class="nav-icon la la-key"></i> <span>Permissions</span></a></li>
            </ul>
        </li>
    </ul>
</li>

<li class='nav-item'><a class='nav-link' href='{{ backpack_url('salesorderdetail') }}'><i class='nav-icon la la-question'></i> SalesOrderDetails</a></li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('salesdn') }}'><i class='nav-icon la la-question'></i> SalesDns</a></li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('deliverynotedetail') }}'><i class='nav-icon la la-question'></i> DeliveryNoteDetails</a></li>