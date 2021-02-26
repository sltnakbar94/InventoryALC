<!-- This file is used to store sidebar items, starting with Backpack\Base 0.9.0 -->
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('dashboard') }}"><i class="las la-tachometer-alt"></i> {{ trans('backpack::base.dashboard') }}</a></li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('submissionform') }}'><i class='nav-icon la la-question'></i> Form Pengajuan</a></li>
<li class="nav-item nav-dropdown">
    <a class="nav-link nav-dropdown-toggle" href="#"><i class="las la-industry"></i> Sales</a>
	<ul class="nav-dropdown-items">
        <li class='nav-item'><a class='nav-link' href='{{ backpack_url('salesorder') }}'><i class="lar la-file-alt"></i> Sales Order</a></li>
        <li class='nav-item'><a class='nav-link' href='{{ backpack_url('salesdn') }}'><i class="lar la-file"></i> Delivery Sales Note</a></li>
    </ul>
</li>
<li class="nav-item nav-dropdown">
    <a class="nav-link nav-dropdown-toggle" href="#"><i class="las la-industry"></i> Warehouse</a>
	<ul class="nav-dropdown-items">
        <li class='nav-item'><a class='nav-link' href='{{ backpack_url('warehousein') }}'><i class="lar la-file-alt"></i> Purchase Order</a></li>
        <li class='nav-item'><a class='nav-link' href='{{ backpack_url('warehouseout') }}'><i class="lar la-file"></i> Delivery Order</a></li>
        <li class='nav-item'><a class='nav-link' href='{{ backpack_url('deliverynote') }}'><i class="lar la-file"></i> Delivery Note</a></li>
    </ul>
</li>
@if (backpack_user()->hasAnyRole(['admin', 'superadmin']))
    <li class="nav-item nav-dropdown">
        <a class="nav-link nav-dropdown-toggle" href="#"><i class="las la-project-diagram"></i> Config</a>
        <ul class="nav-dropdown-items">
            <li class='nav-item'><a class='nav-link' href='{{ backpack_url('item') }}'><i class="las la-list-ol"></i> Items</a></li>
            <li class='nav-item'><a class='nav-link' href='{{ backpack_url('category') }}'><i class="las la-list-ol"></i> Categories</a></li>
            <li class='nav-item'><a class='nav-link' href='{{ backpack_url('brand') }}'><i class="las la-list-ol"></i> Brands</a></li>
            <li class='nav-item'><a class='nav-link' href='{{ backpack_url('unit') }}'><i class="las la-list-ol"></i> Units</a></li>
            <li class='nav-item'><a class='nav-link' href='{{ backpack_url('company') }}'><i class="las la-list-ol"></i> Companies</a></li>
            <li class='nav-item'><a class='nav-link' href='{{ backpack_url('stackholder') }}'><i class="las la-list-ol"></i> Stackholders</a></li>
        </ul>
    </li>
@endif
@if (backpack_user()->hasRole('superadmin'))
    <li class="nav-item nav-dropdown">
        <a class="nav-link nav-dropdown-toggle" href="#"><i class="las la-user-friends"></i> Authentication</a>
        <ul class="nav-dropdown-items">
        <li class="nav-item"><a class="nav-link" href="{{ backpack_url('user') }}"><i class="las la-user-tie"></i> <span>Users</span></a></li>
        <li class="nav-item"><a class="nav-link" href="{{ backpack_url('role') }}"><i class="las la-user-tag"></i> <span>Roles</span></a></li>
        <li class="nav-item"><a class="nav-link" href="{{ backpack_url('permission') }}"><i class="las la-user-lock"></i> <span>Permissions</span></a></li>
        </ul>
    </li>
@endif
