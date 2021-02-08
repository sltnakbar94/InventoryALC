<!-- This file is used to store sidebar items, starting with Backpack\Base 0.9.0 -->
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('dashboard') }}"><i class="la la-home nav-icon"></i> {{ trans('backpack::base.dashboard') }}</a></li>
<li class="nav-item nav-dropdown">
    <a class="nav-link nav-dropdown-toggle" href="#"><i class="nav-icon fa fa-cog"></i> Warehouse</a>
	<ul class="nav-dropdown-items">
        <li class='nav-item'><a class='nav-link' href='{{ backpack_url('warehousein') }}'><i class='nav-icon la la-question'></i> In</a></li>
        <li class='nav-item'><a class='nav-link' href='{{ backpack_url('warehouseout') }}'><i class='nav-icon la la-question'></i> Out</a></li>
    </ul>
</li>
<li class="nav-item nav-dropdown">
    <a class="nav-link nav-dropdown-toggle" href="#"><i class="nav-icon fa fa-cog"></i> Config</a>
	<ul class="nav-dropdown-items">
        <li class='nav-item'><a class='nav-link' href='{{ backpack_url('user') }}'><i class='nav-icon la la-question'></i> Users</a></li>
        <li class='nav-item'><a class='nav-link' href='{{ backpack_url('supplier') }}'><i class='nav-icon la la-question'></i> Suppliers</a></li>
        <li class='nav-item'><a class='nav-link' href='{{ backpack_url('customer') }}'><i class='nav-icon la la-question'></i> Customers</a></li>
        <li class='nav-item'><a class='nav-link' href='{{ backpack_url('item') }}'><i class='nav-icon la la-question'></i> Items</a></li>
    </ul>
</li>

<li class='nav-item'><a class='nav-link' href='{{ backpack_url('windetails') }}'><i class='nav-icon la la-question'></i> WInDetails</a></li>