<?php

/*
|--------------------------------------------------------------------------
| Load The Cached Routes
|--------------------------------------------------------------------------
|
| Here we will decode and unserialize the RouteCollection instance that
| holds all of the route information for an application. This allows
| us to instantaneously load the entire route map into the router.
|
*/

app('router')->setCompiledRoutes(
    array (
  'compiled' => 
  array (
    0 => false,
    1 => 
    array (
      '/admin/login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backpack.auth.login',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::R0sPPc7S6ehEebJ1',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/logout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backpack.auth.logout',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::MIvK01D6K7brMNjG',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/register' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backpack.auth.register',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::pXS0ogrT7C092Dp1',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/password/reset' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backpack.auth.password.reset',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ZMqauMEshvmKz3FN',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/password/email' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backpack.auth.password.email',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/dashboard' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backpack.dashboard',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backpack',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/edit-account-info' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backpack.account.info',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'backpack.account.info.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/change-password' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backpack.account.password',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/charts/purchase-order' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'charts.purchase-order.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/charts/counter' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'charts.counter.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/warehouseout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'warehouseout.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'warehouseout.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/warehouseout/search' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'warehouseout.search',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/warehouseout/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'warehouseout.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/generate-do-pdf' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::dVNq809g3VUZarXJ',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/item_to-bag' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ruXFXcSy4mPW342A',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/item_on-bag' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::P7eL0h5Uj8cO8V7Z',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/delete-item_on-bag' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::lRTPkhtFCnlUtsoD',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/accept' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::vKX2DcnvLnvWHs50',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/decline' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::i9256EZmdnQE73QN',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/warehouseout-pic' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::9dhgtNCbD9xTKJdT',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/warehousein' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'warehousein.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'warehousein.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/warehousein/search' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'warehousein.search',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/warehousein/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'warehousein.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/warehousein-pic' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::WSprYIcRFEu8z9Oj',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/generate-po-pdf' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::4TLx6BQZtDaZr9h8',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/item_to-bag_in' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::O6w5h2NxmC9TbiT0',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/item_on-bag_in' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::wvg8itxWhCaJzo1j',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/delete-item_on-bag_in' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::xEHzJUwlx3Kxcesj',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/deliverynote' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'deliverynote.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'deliverynote.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/deliverynote/search' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'deliverynote.search',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/deliverynote/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'deliverynote.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/item' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'item.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'item.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/item/search' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'item.search',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/item/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'item.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/company' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'company.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'company.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/company/search' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'company.search',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/company/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'company.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/role' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'role.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'role.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/role/search' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'role.search',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/role/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'role.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/category' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'category.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'category.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/category/search' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'category.search',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/category/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'category.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/brand' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'brand.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'brand.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/brand/search' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'brand.search',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/brand/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'brand.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/unit' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'unit.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'unit.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/unit/search' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'unit.search',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/unit/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'unit.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/stackholder' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'stackholder.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'stackholder.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/stackholder/search' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'stackholder.search',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/stackholder/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'stackholder.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/salesorder' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'salesorder.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'salesorder.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/salesorder/search' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'salesorder.search',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/salesorder/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'salesorder.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/salesorder-pic' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::YHc6XJ0dq5aSs48T',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/generate-so-pdf' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::kfyBGDHRBSgOUtOg',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/generate-so-dn' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::p8GHF6M7aHuTFQNZ',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/salesorderdetail' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'salesorderdetail.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'salesorderdetail.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/salesorderdetail/search' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'salesorderdetail.search',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/salesorderdetail/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'salesorderdetail.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/salesdn' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'salesdn.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'salesdn.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/salesdn/search' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'salesdn.search',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/salesdn/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'salesdn.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/generate-dn-pdf' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::kwRJZG09qZSWu6SY',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/generate-sdn-pdf' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::T7vPxbdKoQ62fVHP',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/deliverynotedetail' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'deliverynotedetail.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'deliverynotedetail.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/deliverynotedetail/search' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'deliverynotedetail.search',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/deliverynotedetail/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'deliverynotedetail.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/Api/SalesOrderDetail' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::dFwCZkGioqpPgU0F',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/Api/PurchaseOrderDetail' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Zj65IP4En9NRj3xj',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/Api/DeliveryOrderDetail' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::NbbXWa3mUyg3yOwk',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/Api/SubmissionFormDetail' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Z39ywUxH3OKfnY6d',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/Api/DeliverySODetail' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::rXb05ZIzp2pYpfqF',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/bagitemwarehousein' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'bagitemwarehousein.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'bagitemwarehousein.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/bagitemwarehousein/search' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'bagitemwarehousein.search',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/bagitemwarehousein/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'bagitemwarehousein.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/bagitemwarehouseout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'bagitemwarehouseout.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'bagitemwarehouseout.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/bagitemwarehouseout/search' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'bagitemwarehouseout.search',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/bagitemwarehouseout/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'bagitemwarehouseout.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/submissionform' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'submissionform.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'submissionform.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/submissionform/search' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'submissionform.search',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/submissionform/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'submissionform.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/generate-sf-pdf' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::WgTD4RWKVE5hEoBy',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/submissionformdetail' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'submissionformdetail.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'submissionformdetail.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/submissionformdetail/search' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'submissionformdetail.search',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/submissionformdetail/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'submissionformdetail.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/gudang' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'gudang.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'gudang.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/gudang/search' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'gudang.search',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/gudang/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'gudang.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/permission' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'permission.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'permission.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/permission/search' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'permission.search',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/permission/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'permission.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/user' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'user.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/user/search' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.search',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/user/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/user' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::YujVbdi0HQaXafCw',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/admin/item_bagpack' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::YuKYsag14045Z5eV',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::yN4KatAv0nQVjoLg',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
            'POST' => 2,
            'PUT' => 3,
            'PATCH' => 4,
            'DELETE' => 5,
            'OPTIONS' => 6,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/home' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::47uYDb2U6YWTZq68',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
            'POST' => 2,
            'PUT' => 3,
            'PATCH' => 4,
            'DELETE' => 5,
            'OPTIONS' => 6,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
    ),
    2 => 
    array (
      0 => '{^(?|/admin/(?|p(?|assword/reset/([^/]++)(*:43)|urchase(?|\\-order/([^/]++)/(?|accept(*:86)|denied(*:99))|order/([^/]++)/(?|accept(*:131)|denied(*:145)))|ermission/([^/]++)(?|/(?|details(*:187)|edit(*:199))|(*:208)))|warehouse(?|out/(?|([^/]++)(?|/(?|details(*:259)|edit(*:271)|show(*:283))|(*:292))|process(*:308))|in/(?|([^/]++)(?|/(?|details(*:345)|edit(*:357)|show(*:369))|(*:378))|process(*:394)))|delivery(?|\\-order/([^/]++)/(?|accept(*:441)|denied(*:455))|order/([^/]++)/(?|accept(*:488)|denied(*:502))|note(?|/(?|([^/]++)(?|/(?|details(*:544)|edit(*:556)|show(*:568)|pdf(*:579))|(*:588)|(*:596))|process(*:612))|detail/([^/]++)(?|/(?|de(?|tails(*:653)|nied(*:665))|edit(*:678)|show(*:690)|accept(*:704))|(*:713))))|item/([^/]++)(?|/(?|details(*:751)|edit(*:763)|show(*:775))|(*:784))|c(?|ompany/([^/]++)(?|/(?|details(*:826)|edit(*:838)|show(*:850))|(*:859))|ategory/([^/]++)(?|/(?|details(*:898)|edit(*:910)|show(*:922))|(*:931)))|role/([^/]++)(?|/(?|details(*:968)|edit(*:980)|show(*:992))|(*:1001))|b(?|rand/([^/]++)(?|/(?|details(*:1042)|edit(*:1055)|show(*:1068))|(*:1078))|agitemwarehouse(?|in/(?|([^/]++)(?|/(?|details(*:1134)|edit(*:1147)|show(*:1160))|(*:1170))|edit(*:1184)|qc(*:1195))|out/([^/]++)(?|/(?|details(*:1231)|edit(*:1244)|show(*:1257))|(*:1267))))|u(?|nit/([^/]++)(?|/(?|details(*:1309)|edit(*:1322)|show(*:1335))|(*:1345))|ser/([^/]++)(?|/(?|details(*:1381)|edit(*:1394))|(*:1404)))|s(?|tackholder/([^/]++)(?|/(?|details(*:1452)|edit(*:1465)|show(*:1478))|(*:1488))|ales(?|order(?|/(?|([^/]++)(?|/(?|details(*:1539)|edit(*:1552)|show(*:1565))|(*:1575))|process(*:1592)|([^/]++)/(?|accept(*:1619)|denied(*:1634)))|detail/([^/]++)(?|/(?|de(?|tails(*:1677)|nied(*:1690))|edit(*:1704)|show(*:1717)|accept(*:1732))|(*:1742)))|dn/([^/]++)(?|/(?|details(*:1778)|edit(*:1791)|show(*:1804))|(*:1814)))|ubmissionform(?|/([^/]++)(?|/(?|details(*:1864)|edit(*:1877)|show(*:1890))|(*:1900))|detail/([^/]++)(?|/(?|de(?|tails(*:1942)|nied(*:1955))|edit(*:1969)|show(*:1982)|accept(*:1997))|(*:2007))))|Api/(?|S(?|alesOrderDetail_update/([^/]++)(*:2061)|ubmissionFormDetail_update/([^/]++)(*:2105))|DeliveryOrderDetail_update/([^/]++)(*:2150))|gudang/([^/]++)(?|/(?|details(*:2189)|edit(*:2202)|show(*:2215))|(*:2225))))/?$}sDu',
    ),
    3 => 
    array (
      43 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backpack.auth.password.reset.token',
          ),
          1 => 
          array (
            0 => 'token',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      86 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::lKn8LJ1GxT0TeWfr',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      99 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::kxUNxZoANVktc3kW',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      131 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::dBz1fJcPr2Ap56lM',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      145 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::dCqqpf98g0rYU1jn',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      187 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'permission.showDetailsRow',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      199 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'permission.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      208 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'permission.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'permission.destroy',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      259 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'warehouseout.showDetailsRow',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      271 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'warehouseout.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      283 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'warehouseout.show',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      292 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'warehouseout.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'warehouseout.destroy',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      308 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::RjTb1IMvgvIUlGEW',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      345 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'warehousein.showDetailsRow',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      357 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'warehousein.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      369 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'warehousein.show',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      378 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'warehousein.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'warehousein.destroy',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      394 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::GIf8SBoPjaTOp9Mk',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      441 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::CDhWOknmfkq3VcvA',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      455 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::DU1dcNbX0wVpNPI0',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      488 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::IJ3mxCxYp06XBXj5',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      502 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::UB8InVaNcabLEyYZ',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      544 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'deliverynote.showDetailsRow',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      556 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'deliverynote.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      568 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'deliverynote.show',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      579 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::iphZD9KT0Y4YJuFF',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      588 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'deliverynote.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'deliverynote.destroy',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      596 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::qAMweQcz41dMxB86',
          ),
          1 => 
          array (
            0 => 'warehouse_out_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      612 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::y4PKzzDibytLB0CK',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      653 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'deliverynotedetail.showDetailsRow',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      665 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::fgx5GONSOn8E3q8d',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      678 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'deliverynotedetail.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      690 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'deliverynotedetail.show',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      704 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::kWLKmNDb8d6RGb1j',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      713 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'deliverynotedetail.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'deliverynotedetail.destroy',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      751 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'item.showDetailsRow',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      763 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'item.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      775 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'item.show',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      784 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'item.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'item.destroy',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      826 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'company.showDetailsRow',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      838 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'company.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      850 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'company.show',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      859 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'company.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'company.destroy',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      898 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'category.showDetailsRow',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      910 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'category.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      922 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'category.show',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      931 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'category.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'category.destroy',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      968 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'role.showDetailsRow',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      980 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'role.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      992 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'role.show',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1001 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'role.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'role.destroy',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1042 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'brand.showDetailsRow',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1055 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'brand.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1068 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'brand.show',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1078 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'brand.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'brand.destroy',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1134 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'bagitemwarehousein.showDetailsRow',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1147 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'bagitemwarehousein.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1160 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'bagitemwarehousein.show',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1170 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'bagitemwarehousein.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'bagitemwarehousein.destroy',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1184 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::MByNBQlhQeYarRnn',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1195 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::2BUSELsYlPbrFgJs',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1231 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'bagitemwarehouseout.showDetailsRow',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1244 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'bagitemwarehouseout.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1257 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'bagitemwarehouseout.show',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1267 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'bagitemwarehouseout.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'bagitemwarehouseout.destroy',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1309 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'unit.showDetailsRow',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1322 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'unit.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1335 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'unit.show',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1345 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'unit.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'unit.destroy',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1381 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.showDetailsRow',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1394 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1404 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'user.destroy',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1452 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'stackholder.showDetailsRow',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1465 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'stackholder.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1478 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'stackholder.show',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1488 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'stackholder.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'stackholder.destroy',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1539 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'salesorder.showDetailsRow',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1552 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'salesorder.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1565 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'salesorder.show',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1575 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'salesorder.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'salesorder.destroy',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1592 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::cj7b6xMyzUd0GF47',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1619 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::LA5IK5vZZmkFRkZ2',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1634 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::NhoLRS1iiP4J5T9m',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1677 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'salesorderdetail.showDetailsRow',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1690 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::DuZO1mPxfyAhBS7s',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1704 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'salesorderdetail.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1717 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'salesorderdetail.show',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1732 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::c0WnTyWWzGucAPRy',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1742 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'salesorderdetail.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'salesorderdetail.destroy',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1778 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'salesdn.showDetailsRow',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1791 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'salesdn.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1804 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'salesdn.show',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1814 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'salesdn.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'salesdn.destroy',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1864 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'submissionform.showDetailsRow',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1877 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'submissionform.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1890 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'submissionform.show',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1900 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'submissionform.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'submissionform.destroy',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1942 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'submissionformdetail.showDetailsRow',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1955 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::qZMcDrzaADE5UF8u',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1969 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'submissionformdetail.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1982 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'submissionformdetail.show',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1997 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::5UtFR6SfBuo2ssGt',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2007 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'submissionformdetail.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'submissionformdetail.destroy',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2061 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::uMSjCDDClbzn4WOU',
          ),
          1 => 
          array (
            0 => 'sales_order_detail_id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2105 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::XAkullcs4ayvE9cI',
          ),
          1 => 
          array (
            0 => 'submission_form_detail_id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2150 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::37SYHMwnkAvABruK',
          ),
          1 => 
          array (
            0 => 'delivery_order_detail_id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2189 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'gudang.showDetailsRow',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2202 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'gudang.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2215 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'gudang.show',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2225 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'gudang.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'gudang.destroy',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => NULL,
          1 => NULL,
          2 => NULL,
          3 => NULL,
          4 => false,
          5 => false,
          6 => 0,
        ),
      ),
    ),
    4 => NULL,
  ),
  'attributes' => 
  array (
    'backpack.auth.login' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/login',
      'action' => 
      array (
        'middleware' => 'web',
        'uses' => 'Backpack\\CRUD\\app\\Http\\Controllers\\Auth\\LoginController@showLoginForm',
        'controller' => 'Backpack\\CRUD\\app\\Http\\Controllers\\Auth\\LoginController@showLoginForm',
        'namespace' => 'Backpack\\CRUD\\app\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'backpack.auth.login',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::R0sPPc7S6ehEebJ1' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/login',
      'action' => 
      array (
        'middleware' => 'web',
        'uses' => 'Backpack\\CRUD\\app\\Http\\Controllers\\Auth\\LoginController@login',
        'controller' => 'Backpack\\CRUD\\app\\Http\\Controllers\\Auth\\LoginController@login',
        'namespace' => 'Backpack\\CRUD\\app\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'generated::R0sPPc7S6ehEebJ1',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backpack.auth.logout' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/logout',
      'action' => 
      array (
        'middleware' => 'web',
        'uses' => 'Backpack\\CRUD\\app\\Http\\Controllers\\Auth\\LoginController@logout',
        'controller' => 'Backpack\\CRUD\\app\\Http\\Controllers\\Auth\\LoginController@logout',
        'namespace' => 'Backpack\\CRUD\\app\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'backpack.auth.logout',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::MIvK01D6K7brMNjG' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/logout',
      'action' => 
      array (
        'middleware' => 'web',
        'uses' => 'Backpack\\CRUD\\app\\Http\\Controllers\\Auth\\LoginController@logout',
        'controller' => 'Backpack\\CRUD\\app\\Http\\Controllers\\Auth\\LoginController@logout',
        'namespace' => 'Backpack\\CRUD\\app\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'generated::MIvK01D6K7brMNjG',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backpack.auth.register' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/register',
      'action' => 
      array (
        'middleware' => 'web',
        'uses' => 'Backpack\\CRUD\\app\\Http\\Controllers\\Auth\\RegisterController@showRegistrationForm',
        'controller' => 'Backpack\\CRUD\\app\\Http\\Controllers\\Auth\\RegisterController@showRegistrationForm',
        'namespace' => 'Backpack\\CRUD\\app\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'backpack.auth.register',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::pXS0ogrT7C092Dp1' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/register',
      'action' => 
      array (
        'middleware' => 'web',
        'uses' => 'Backpack\\CRUD\\app\\Http\\Controllers\\Auth\\RegisterController@register',
        'controller' => 'Backpack\\CRUD\\app\\Http\\Controllers\\Auth\\RegisterController@register',
        'namespace' => 'Backpack\\CRUD\\app\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'generated::pXS0ogrT7C092Dp1',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backpack.auth.password.reset' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/password/reset',
      'action' => 
      array (
        'middleware' => 'web',
        'uses' => 'Backpack\\CRUD\\app\\Http\\Controllers\\Auth\\ForgotPasswordController@showLinkRequestForm',
        'controller' => 'Backpack\\CRUD\\app\\Http\\Controllers\\Auth\\ForgotPasswordController@showLinkRequestForm',
        'namespace' => 'Backpack\\CRUD\\app\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'backpack.auth.password.reset',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::ZMqauMEshvmKz3FN' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/password/reset',
      'action' => 
      array (
        'middleware' => 'web',
        'uses' => 'Backpack\\CRUD\\app\\Http\\Controllers\\Auth\\ResetPasswordController@reset',
        'controller' => 'Backpack\\CRUD\\app\\Http\\Controllers\\Auth\\ResetPasswordController@reset',
        'namespace' => 'Backpack\\CRUD\\app\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'generated::ZMqauMEshvmKz3FN',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backpack.auth.password.reset.token' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/password/reset/{token}',
      'action' => 
      array (
        'middleware' => 'web',
        'uses' => 'Backpack\\CRUD\\app\\Http\\Controllers\\Auth\\ResetPasswordController@showResetForm',
        'controller' => 'Backpack\\CRUD\\app\\Http\\Controllers\\Auth\\ResetPasswordController@showResetForm',
        'namespace' => 'Backpack\\CRUD\\app\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'backpack.auth.password.reset.token',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backpack.auth.password.email' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/password/email',
      'action' => 
      array (
        'middleware' => 'web',
        'uses' => 'Backpack\\CRUD\\app\\Http\\Controllers\\Auth\\ForgotPasswordController@sendResetLinkEmail',
        'controller' => 'Backpack\\CRUD\\app\\Http\\Controllers\\Auth\\ForgotPasswordController@sendResetLinkEmail',
        'namespace' => 'Backpack\\CRUD\\app\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'backpack.auth.password.email',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backpack.dashboard' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/dashboard',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdminController@dashboard',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdminController@dashboard',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'backpack.dashboard',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backpack' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin',
      'action' => 
      array (
        'middleware' => 'web',
        'uses' => 'Backpack\\CRUD\\app\\Http\\Controllers\\AdminController@redirect',
        'controller' => 'Backpack\\CRUD\\app\\Http\\Controllers\\AdminController@redirect',
        'namespace' => 'Backpack\\CRUD\\app\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'backpack',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backpack.account.info' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/edit-account-info',
      'action' => 
      array (
        'middleware' => 'web',
        'uses' => 'Backpack\\CRUD\\app\\Http\\Controllers\\MyAccountController@getAccountInfoForm',
        'controller' => 'Backpack\\CRUD\\app\\Http\\Controllers\\MyAccountController@getAccountInfoForm',
        'namespace' => 'Backpack\\CRUD\\app\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'backpack.account.info',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backpack.account.info.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/edit-account-info',
      'action' => 
      array (
        'middleware' => 'web',
        'uses' => 'Backpack\\CRUD\\app\\Http\\Controllers\\MyAccountController@postAccountInfoForm',
        'controller' => 'Backpack\\CRUD\\app\\Http\\Controllers\\MyAccountController@postAccountInfoForm',
        'namespace' => 'Backpack\\CRUD\\app\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'backpack.account.info.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backpack.account.password' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/change-password',
      'action' => 
      array (
        'middleware' => 'web',
        'uses' => 'Backpack\\CRUD\\app\\Http\\Controllers\\MyAccountController@postChangePasswordForm',
        'controller' => 'Backpack\\CRUD\\app\\Http\\Controllers\\MyAccountController@postChangePasswordForm',
        'namespace' => 'Backpack\\CRUD\\app\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'backpack.account.password',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'charts.purchase-order.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/charts/purchase-order',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Charts\\PurchaseOrderChartController@response',
        'controller' => 'App\\Http\\Controllers\\Admin\\Charts\\PurchaseOrderChartController@response',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'charts.purchase-order.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'charts.counter.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/charts/counter',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Charts\\CounterChartController@response',
        'controller' => 'App\\Http\\Controllers\\Admin\\Charts\\CounterChartController@response',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'charts.counter.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'warehouseout.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/warehouseout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'warehouseout.index',
        'uses' => 'App\\Http\\Controllers\\Admin\\WarehouseOutCrudController@index',
        'operation' => 'list',
        'controller' => 'App\\Http\\Controllers\\Admin\\WarehouseOutCrudController@index',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'warehouseout.search' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/warehouseout/search',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'warehouseout.search',
        'uses' => 'App\\Http\\Controllers\\Admin\\WarehouseOutCrudController@search',
        'operation' => 'list',
        'controller' => 'App\\Http\\Controllers\\Admin\\WarehouseOutCrudController@search',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'warehouseout.showDetailsRow' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/warehouseout/{id}/details',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'warehouseout.showDetailsRow',
        'uses' => 'App\\Http\\Controllers\\Admin\\WarehouseOutCrudController@showDetailsRow',
        'operation' => 'list',
        'controller' => 'App\\Http\\Controllers\\Admin\\WarehouseOutCrudController@showDetailsRow',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'warehouseout.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/warehouseout/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'warehouseout.create',
        'uses' => 'App\\Http\\Controllers\\Admin\\WarehouseOutCrudController@create',
        'operation' => 'create',
        'controller' => 'App\\Http\\Controllers\\Admin\\WarehouseOutCrudController@create',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'warehouseout.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/warehouseout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'warehouseout.store',
        'uses' => 'App\\Http\\Controllers\\Admin\\WarehouseOutCrudController@store',
        'operation' => 'create',
        'controller' => 'App\\Http\\Controllers\\Admin\\WarehouseOutCrudController@store',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'warehouseout.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/warehouseout/{id}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'warehouseout.edit',
        'uses' => 'App\\Http\\Controllers\\Admin\\WarehouseOutCrudController@edit',
        'operation' => 'update',
        'controller' => 'App\\Http\\Controllers\\Admin\\WarehouseOutCrudController@edit',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'warehouseout.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/warehouseout/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'warehouseout.update',
        'uses' => 'App\\Http\\Controllers\\Admin\\WarehouseOutCrudController@update',
        'operation' => 'update',
        'controller' => 'App\\Http\\Controllers\\Admin\\WarehouseOutCrudController@update',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'warehouseout.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/warehouseout/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'warehouseout.destroy',
        'uses' => 'App\\Http\\Controllers\\Admin\\WarehouseOutCrudController@destroy',
        'operation' => 'delete',
        'controller' => 'App\\Http\\Controllers\\Admin\\WarehouseOutCrudController@destroy',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'warehouseout.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/warehouseout/{id}/show',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'warehouseout.show',
        'uses' => 'App\\Http\\Controllers\\Admin\\WarehouseOutCrudController@show',
        'operation' => 'show',
        'controller' => 'App\\Http\\Controllers\\Admin\\WarehouseOutCrudController@show',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::dVNq809g3VUZarXJ' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/generate-do-pdf',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\WarehouseOutCrudController@pdf',
        'controller' => 'App\\Http\\Controllers\\Admin\\WarehouseOutCrudController@pdf',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'generated::dVNq809g3VUZarXJ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::ruXFXcSy4mPW342A' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/item_to-bag',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ApiController@itemToBag',
        'controller' => 'App\\Http\\Controllers\\Admin\\ApiController@itemToBag',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'generated::ruXFXcSy4mPW342A',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::P7eL0h5Uj8cO8V7Z' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/item_on-bag',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ApiController@checkItemOnBagById',
        'controller' => 'App\\Http\\Controllers\\Admin\\ApiController@checkItemOnBagById',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'generated::P7eL0h5Uj8cO8V7Z',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::lRTPkhtFCnlUtsoD' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/delete-item_on-bag',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ApiController@deleteItemOnBag',
        'controller' => 'App\\Http\\Controllers\\Admin\\ApiController@deleteItemOnBag',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'generated::lRTPkhtFCnlUtsoD',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::vKX2DcnvLnvWHs50' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/accept',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ApiController@accept',
        'controller' => 'App\\Http\\Controllers\\Admin\\ApiController@accept',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'generated::vKX2DcnvLnvWHs50',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::i9256EZmdnQE73QN' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/decline',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ApiController@decline',
        'controller' => 'App\\Http\\Controllers\\Admin\\ApiController@decline',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'generated::i9256EZmdnQE73QN',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::9dhgtNCbD9xTKJdT' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/warehouseout-pic',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\WarehouseOutCrudController@storePic',
        'controller' => 'App\\Http\\Controllers\\Admin\\WarehouseOutCrudController@storePic',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'generated::9dhgtNCbD9xTKJdT',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::RjTb1IMvgvIUlGEW' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/warehouseout/process',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\WarehouseOutCrudController@process',
        'controller' => 'App\\Http\\Controllers\\Admin\\WarehouseOutCrudController@process',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'generated::RjTb1IMvgvIUlGEW',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::CDhWOknmfkq3VcvA' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/delivery-order/{id}/accept',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\WarehouseOutCrudController@accept',
        'controller' => 'App\\Http\\Controllers\\Admin\\WarehouseOutCrudController@accept',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'generated::CDhWOknmfkq3VcvA',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::DU1dcNbX0wVpNPI0' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/delivery-order/{id}/denied',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\WarehouseOutCrudController@denied',
        'controller' => 'App\\Http\\Controllers\\Admin\\WarehouseOutCrudController@denied',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'generated::DU1dcNbX0wVpNPI0',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::IJ3mxCxYp06XBXj5' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/deliveryorder/{id}/accept',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\WarehouseOutCrudController@acceptHeader',
        'controller' => 'App\\Http\\Controllers\\Admin\\WarehouseOutCrudController@acceptHeader',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'generated::IJ3mxCxYp06XBXj5',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::UB8InVaNcabLEyYZ' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/deliveryorder/{id}/denied',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\WarehouseOutCrudController@deniedHeader',
        'controller' => 'App\\Http\\Controllers\\Admin\\WarehouseOutCrudController@deniedHeader',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'generated::UB8InVaNcabLEyYZ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'warehousein.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/warehousein',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'warehousein.index',
        'uses' => 'App\\Http\\Controllers\\Admin\\WarehouseInCrudController@index',
        'operation' => 'list',
        'controller' => 'App\\Http\\Controllers\\Admin\\WarehouseInCrudController@index',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'warehousein.search' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/warehousein/search',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'warehousein.search',
        'uses' => 'App\\Http\\Controllers\\Admin\\WarehouseInCrudController@search',
        'operation' => 'list',
        'controller' => 'App\\Http\\Controllers\\Admin\\WarehouseInCrudController@search',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'warehousein.showDetailsRow' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/warehousein/{id}/details',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'warehousein.showDetailsRow',
        'uses' => 'App\\Http\\Controllers\\Admin\\WarehouseInCrudController@showDetailsRow',
        'operation' => 'list',
        'controller' => 'App\\Http\\Controllers\\Admin\\WarehouseInCrudController@showDetailsRow',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'warehousein.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/warehousein/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'warehousein.create',
        'uses' => 'App\\Http\\Controllers\\Admin\\WarehouseInCrudController@create',
        'operation' => 'create',
        'controller' => 'App\\Http\\Controllers\\Admin\\WarehouseInCrudController@create',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'warehousein.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/warehousein',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'warehousein.store',
        'uses' => 'App\\Http\\Controllers\\Admin\\WarehouseInCrudController@store',
        'operation' => 'create',
        'controller' => 'App\\Http\\Controllers\\Admin\\WarehouseInCrudController@store',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'warehousein.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/warehousein/{id}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'warehousein.edit',
        'uses' => 'App\\Http\\Controllers\\Admin\\WarehouseInCrudController@edit',
        'operation' => 'update',
        'controller' => 'App\\Http\\Controllers\\Admin\\WarehouseInCrudController@edit',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'warehousein.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/warehousein/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'warehousein.update',
        'uses' => 'App\\Http\\Controllers\\Admin\\WarehouseInCrudController@update',
        'operation' => 'update',
        'controller' => 'App\\Http\\Controllers\\Admin\\WarehouseInCrudController@update',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'warehousein.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/warehousein/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'warehousein.destroy',
        'uses' => 'App\\Http\\Controllers\\Admin\\WarehouseInCrudController@destroy',
        'operation' => 'delete',
        'controller' => 'App\\Http\\Controllers\\Admin\\WarehouseInCrudController@destroy',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'warehousein.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/warehousein/{id}/show',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'warehousein.show',
        'uses' => 'App\\Http\\Controllers\\Admin\\WarehouseInCrudController@show',
        'operation' => 'show',
        'controller' => 'App\\Http\\Controllers\\Admin\\WarehouseInCrudController@show',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::GIf8SBoPjaTOp9Mk' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/warehousein/process',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\WarehouseInCrudController@process',
        'controller' => 'App\\Http\\Controllers\\Admin\\WarehouseInCrudController@process',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'generated::GIf8SBoPjaTOp9Mk',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::WSprYIcRFEu8z9Oj' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/warehousein-pic',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\WarehouseInCrudController@storePic',
        'controller' => 'App\\Http\\Controllers\\Admin\\WarehouseInCrudController@storePic',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'generated::WSprYIcRFEu8z9Oj',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::4TLx6BQZtDaZr9h8' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/generate-po-pdf',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\WarehouseInCrudController@pdf',
        'controller' => 'App\\Http\\Controllers\\Admin\\WarehouseInCrudController@pdf',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'generated::4TLx6BQZtDaZr9h8',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::O6w5h2NxmC9TbiT0' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/item_to-bag_in',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ApiController@itemToBagIn',
        'controller' => 'App\\Http\\Controllers\\Admin\\ApiController@itemToBagIn',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'generated::O6w5h2NxmC9TbiT0',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::wvg8itxWhCaJzo1j' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/item_on-bag_in',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ApiController@checkItemOnBagInById',
        'controller' => 'App\\Http\\Controllers\\Admin\\ApiController@checkItemOnBagInById',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'generated::wvg8itxWhCaJzo1j',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::xEHzJUwlx3Kxcesj' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/delete-item_on-bag_in',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ApiController@deleteItemOnBagIn',
        'controller' => 'App\\Http\\Controllers\\Admin\\ApiController@deleteItemOnBagIn',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'generated::xEHzJUwlx3Kxcesj',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::lKn8LJ1GxT0TeWfr' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/purchase-order/{id}/accept',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\WarehouseInCrudController@accept',
        'controller' => 'App\\Http\\Controllers\\Admin\\WarehouseInCrudController@accept',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'generated::lKn8LJ1GxT0TeWfr',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::kxUNxZoANVktc3kW' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/purchase-order/{id}/denied',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\WarehouseInCrudController@denied',
        'controller' => 'App\\Http\\Controllers\\Admin\\WarehouseInCrudController@denied',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'generated::kxUNxZoANVktc3kW',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::dBz1fJcPr2Ap56lM' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/purchaseorder/{id}/accept',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\WarehouseInCrudController@acceptHeader',
        'controller' => 'App\\Http\\Controllers\\Admin\\WarehouseInCrudController@acceptHeader',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'generated::dBz1fJcPr2Ap56lM',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::dCqqpf98g0rYU1jn' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/purchaseorder/{id}/denied',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\WarehouseInCrudController@deniedHeader',
        'controller' => 'App\\Http\\Controllers\\Admin\\WarehouseInCrudController@deniedHeader',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'generated::dCqqpf98g0rYU1jn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'deliverynote.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/deliverynote',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'deliverynote.index',
        'uses' => 'App\\Http\\Controllers\\Admin\\DeliveryNoteCrudController@index',
        'operation' => 'list',
        'controller' => 'App\\Http\\Controllers\\Admin\\DeliveryNoteCrudController@index',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'deliverynote.search' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/deliverynote/search',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'deliverynote.search',
        'uses' => 'App\\Http\\Controllers\\Admin\\DeliveryNoteCrudController@search',
        'operation' => 'list',
        'controller' => 'App\\Http\\Controllers\\Admin\\DeliveryNoteCrudController@search',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'deliverynote.showDetailsRow' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/deliverynote/{id}/details',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'deliverynote.showDetailsRow',
        'uses' => 'App\\Http\\Controllers\\Admin\\DeliveryNoteCrudController@showDetailsRow',
        'operation' => 'list',
        'controller' => 'App\\Http\\Controllers\\Admin\\DeliveryNoteCrudController@showDetailsRow',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'deliverynote.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/deliverynote/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'deliverynote.create',
        'uses' => 'App\\Http\\Controllers\\Admin\\DeliveryNoteCrudController@create',
        'operation' => 'create',
        'controller' => 'App\\Http\\Controllers\\Admin\\DeliveryNoteCrudController@create',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'deliverynote.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/deliverynote',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'deliverynote.store',
        'uses' => 'App\\Http\\Controllers\\Admin\\DeliveryNoteCrudController@store',
        'operation' => 'create',
        'controller' => 'App\\Http\\Controllers\\Admin\\DeliveryNoteCrudController@store',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'deliverynote.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/deliverynote/{id}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'deliverynote.edit',
        'uses' => 'App\\Http\\Controllers\\Admin\\DeliveryNoteCrudController@edit',
        'operation' => 'update',
        'controller' => 'App\\Http\\Controllers\\Admin\\DeliveryNoteCrudController@edit',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'deliverynote.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/deliverynote/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'deliverynote.update',
        'uses' => 'App\\Http\\Controllers\\Admin\\DeliveryNoteCrudController@update',
        'operation' => 'update',
        'controller' => 'App\\Http\\Controllers\\Admin\\DeliveryNoteCrudController@update',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'deliverynote.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/deliverynote/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'deliverynote.destroy',
        'uses' => 'App\\Http\\Controllers\\Admin\\DeliveryNoteCrudController@destroy',
        'operation' => 'delete',
        'controller' => 'App\\Http\\Controllers\\Admin\\DeliveryNoteCrudController@destroy',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'deliverynote.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/deliverynote/{id}/show',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'deliverynote.show',
        'uses' => 'App\\Http\\Controllers\\Admin\\DeliveryNoteCrudController@show',
        'operation' => 'show',
        'controller' => 'App\\Http\\Controllers\\Admin\\DeliveryNoteCrudController@show',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::qAMweQcz41dMxB86' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/deliverynote/{warehouse_out_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\DeliveryNoteCrudController@generateDeliveryNote',
        'controller' => 'App\\Http\\Controllers\\Admin\\DeliveryNoteCrudController@generateDeliveryNote',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'generated::qAMweQcz41dMxB86',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::iphZD9KT0Y4YJuFF' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/deliverynote/{id}/pdf',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\DeliveryNoteCrudController@pdf',
        'controller' => 'App\\Http\\Controllers\\Admin\\DeliveryNoteCrudController@pdf',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'generated::iphZD9KT0Y4YJuFF',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::y4PKzzDibytLB0CK' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/deliverynote/process',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\DeliveryNoteCrudController@process',
        'controller' => 'App\\Http\\Controllers\\Admin\\DeliveryNoteCrudController@process',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'generated::y4PKzzDibytLB0CK',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'item.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/item',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'item.index',
        'uses' => 'App\\Http\\Controllers\\Admin\\ItemCrudController@index',
        'operation' => 'list',
        'controller' => 'App\\Http\\Controllers\\Admin\\ItemCrudController@index',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'item.search' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/item/search',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'item.search',
        'uses' => 'App\\Http\\Controllers\\Admin\\ItemCrudController@search',
        'operation' => 'list',
        'controller' => 'App\\Http\\Controllers\\Admin\\ItemCrudController@search',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'item.showDetailsRow' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/item/{id}/details',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'item.showDetailsRow',
        'uses' => 'App\\Http\\Controllers\\Admin\\ItemCrudController@showDetailsRow',
        'operation' => 'list',
        'controller' => 'App\\Http\\Controllers\\Admin\\ItemCrudController@showDetailsRow',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'item.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/item/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'item.create',
        'uses' => 'App\\Http\\Controllers\\Admin\\ItemCrudController@create',
        'operation' => 'create',
        'controller' => 'App\\Http\\Controllers\\Admin\\ItemCrudController@create',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'item.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/item',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'item.store',
        'uses' => 'App\\Http\\Controllers\\Admin\\ItemCrudController@store',
        'operation' => 'create',
        'controller' => 'App\\Http\\Controllers\\Admin\\ItemCrudController@store',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'item.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/item/{id}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'item.edit',
        'uses' => 'App\\Http\\Controllers\\Admin\\ItemCrudController@edit',
        'operation' => 'update',
        'controller' => 'App\\Http\\Controllers\\Admin\\ItemCrudController@edit',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'item.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/item/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'item.update',
        'uses' => 'App\\Http\\Controllers\\Admin\\ItemCrudController@update',
        'operation' => 'update',
        'controller' => 'App\\Http\\Controllers\\Admin\\ItemCrudController@update',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'item.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/item/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'item.destroy',
        'uses' => 'App\\Http\\Controllers\\Admin\\ItemCrudController@destroy',
        'operation' => 'delete',
        'controller' => 'App\\Http\\Controllers\\Admin\\ItemCrudController@destroy',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'item.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/item/{id}/show',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'item.show',
        'uses' => 'App\\Http\\Controllers\\Admin\\ItemCrudController@show',
        'operation' => 'show',
        'controller' => 'App\\Http\\Controllers\\Admin\\ItemCrudController@show',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'company.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/company',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'company.index',
        'uses' => 'App\\Http\\Controllers\\Admin\\CompanyCrudController@index',
        'operation' => 'list',
        'controller' => 'App\\Http\\Controllers\\Admin\\CompanyCrudController@index',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'company.search' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/company/search',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'company.search',
        'uses' => 'App\\Http\\Controllers\\Admin\\CompanyCrudController@search',
        'operation' => 'list',
        'controller' => 'App\\Http\\Controllers\\Admin\\CompanyCrudController@search',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'company.showDetailsRow' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/company/{id}/details',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'company.showDetailsRow',
        'uses' => 'App\\Http\\Controllers\\Admin\\CompanyCrudController@showDetailsRow',
        'operation' => 'list',
        'controller' => 'App\\Http\\Controllers\\Admin\\CompanyCrudController@showDetailsRow',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'company.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/company/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'company.create',
        'uses' => 'App\\Http\\Controllers\\Admin\\CompanyCrudController@create',
        'operation' => 'create',
        'controller' => 'App\\Http\\Controllers\\Admin\\CompanyCrudController@create',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'company.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/company',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'company.store',
        'uses' => 'App\\Http\\Controllers\\Admin\\CompanyCrudController@store',
        'operation' => 'create',
        'controller' => 'App\\Http\\Controllers\\Admin\\CompanyCrudController@store',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'company.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/company/{id}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'company.edit',
        'uses' => 'App\\Http\\Controllers\\Admin\\CompanyCrudController@edit',
        'operation' => 'update',
        'controller' => 'App\\Http\\Controllers\\Admin\\CompanyCrudController@edit',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'company.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/company/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'company.update',
        'uses' => 'App\\Http\\Controllers\\Admin\\CompanyCrudController@update',
        'operation' => 'update',
        'controller' => 'App\\Http\\Controllers\\Admin\\CompanyCrudController@update',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'company.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/company/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'company.destroy',
        'uses' => 'App\\Http\\Controllers\\Admin\\CompanyCrudController@destroy',
        'operation' => 'delete',
        'controller' => 'App\\Http\\Controllers\\Admin\\CompanyCrudController@destroy',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'company.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/company/{id}/show',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'company.show',
        'uses' => 'App\\Http\\Controllers\\Admin\\CompanyCrudController@show',
        'operation' => 'show',
        'controller' => 'App\\Http\\Controllers\\Admin\\CompanyCrudController@show',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'role.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/role',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'role.index',
        'uses' => 'Backpack\\PermissionManager\\app\\Http\\Controllers\\RoleCrudController@index',
        'operation' => 'list',
        'controller' => 'Backpack\\PermissionManager\\app\\Http\\Controllers\\RoleCrudController@index',
        'namespace' => 'Backpack\\PermissionManager\\app\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'role.search' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/role/search',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'role.search',
        'uses' => 'Backpack\\PermissionManager\\app\\Http\\Controllers\\RoleCrudController@search',
        'operation' => 'list',
        'controller' => 'Backpack\\PermissionManager\\app\\Http\\Controllers\\RoleCrudController@search',
        'namespace' => 'Backpack\\PermissionManager\\app\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'role.showDetailsRow' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/role/{id}/details',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'role.showDetailsRow',
        'uses' => 'Backpack\\PermissionManager\\app\\Http\\Controllers\\RoleCrudController@showDetailsRow',
        'operation' => 'list',
        'controller' => 'Backpack\\PermissionManager\\app\\Http\\Controllers\\RoleCrudController@showDetailsRow',
        'namespace' => 'Backpack\\PermissionManager\\app\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'role.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/role/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'role.create',
        'uses' => 'Backpack\\PermissionManager\\app\\Http\\Controllers\\RoleCrudController@create',
        'operation' => 'create',
        'controller' => 'Backpack\\PermissionManager\\app\\Http\\Controllers\\RoleCrudController@create',
        'namespace' => 'Backpack\\PermissionManager\\app\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'role.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/role',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'role.store',
        'uses' => 'Backpack\\PermissionManager\\app\\Http\\Controllers\\RoleCrudController@store',
        'operation' => 'create',
        'controller' => 'Backpack\\PermissionManager\\app\\Http\\Controllers\\RoleCrudController@store',
        'namespace' => 'Backpack\\PermissionManager\\app\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'role.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/role/{id}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'role.edit',
        'uses' => 'Backpack\\PermissionManager\\app\\Http\\Controllers\\RoleCrudController@edit',
        'operation' => 'update',
        'controller' => 'Backpack\\PermissionManager\\app\\Http\\Controllers\\RoleCrudController@edit',
        'namespace' => 'Backpack\\PermissionManager\\app\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'role.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/role/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'role.update',
        'uses' => 'Backpack\\PermissionManager\\app\\Http\\Controllers\\RoleCrudController@update',
        'operation' => 'update',
        'controller' => 'Backpack\\PermissionManager\\app\\Http\\Controllers\\RoleCrudController@update',
        'namespace' => 'Backpack\\PermissionManager\\app\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'role.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/role/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'role.destroy',
        'uses' => 'Backpack\\PermissionManager\\app\\Http\\Controllers\\RoleCrudController@destroy',
        'operation' => 'delete',
        'controller' => 'Backpack\\PermissionManager\\app\\Http\\Controllers\\RoleCrudController@destroy',
        'namespace' => 'Backpack\\PermissionManager\\app\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'role.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/role/{id}/show',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'role.show',
        'uses' => 'App\\Http\\Controllers\\Admin\\RoleCrudController@show',
        'operation' => 'show',
        'controller' => 'App\\Http\\Controllers\\Admin\\RoleCrudController@show',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'category.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/category',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'category.index',
        'uses' => 'App\\Http\\Controllers\\Admin\\CategoryCrudController@index',
        'operation' => 'list',
        'controller' => 'App\\Http\\Controllers\\Admin\\CategoryCrudController@index',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'category.search' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/category/search',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'category.search',
        'uses' => 'App\\Http\\Controllers\\Admin\\CategoryCrudController@search',
        'operation' => 'list',
        'controller' => 'App\\Http\\Controllers\\Admin\\CategoryCrudController@search',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'category.showDetailsRow' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/category/{id}/details',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'category.showDetailsRow',
        'uses' => 'App\\Http\\Controllers\\Admin\\CategoryCrudController@showDetailsRow',
        'operation' => 'list',
        'controller' => 'App\\Http\\Controllers\\Admin\\CategoryCrudController@showDetailsRow',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'category.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/category/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'category.create',
        'uses' => 'App\\Http\\Controllers\\Admin\\CategoryCrudController@create',
        'operation' => 'create',
        'controller' => 'App\\Http\\Controllers\\Admin\\CategoryCrudController@create',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'category.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/category',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'category.store',
        'uses' => 'App\\Http\\Controllers\\Admin\\CategoryCrudController@store',
        'operation' => 'create',
        'controller' => 'App\\Http\\Controllers\\Admin\\CategoryCrudController@store',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'category.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/category/{id}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'category.edit',
        'uses' => 'App\\Http\\Controllers\\Admin\\CategoryCrudController@edit',
        'operation' => 'update',
        'controller' => 'App\\Http\\Controllers\\Admin\\CategoryCrudController@edit',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'category.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/category/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'category.update',
        'uses' => 'App\\Http\\Controllers\\Admin\\CategoryCrudController@update',
        'operation' => 'update',
        'controller' => 'App\\Http\\Controllers\\Admin\\CategoryCrudController@update',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'category.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/category/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'category.destroy',
        'uses' => 'App\\Http\\Controllers\\Admin\\CategoryCrudController@destroy',
        'operation' => 'delete',
        'controller' => 'App\\Http\\Controllers\\Admin\\CategoryCrudController@destroy',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'category.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/category/{id}/show',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'category.show',
        'uses' => 'App\\Http\\Controllers\\Admin\\CategoryCrudController@show',
        'operation' => 'show',
        'controller' => 'App\\Http\\Controllers\\Admin\\CategoryCrudController@show',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'brand.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/brand',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'brand.index',
        'uses' => 'App\\Http\\Controllers\\Admin\\BrandCrudController@index',
        'operation' => 'list',
        'controller' => 'App\\Http\\Controllers\\Admin\\BrandCrudController@index',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'brand.search' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/brand/search',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'brand.search',
        'uses' => 'App\\Http\\Controllers\\Admin\\BrandCrudController@search',
        'operation' => 'list',
        'controller' => 'App\\Http\\Controllers\\Admin\\BrandCrudController@search',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'brand.showDetailsRow' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/brand/{id}/details',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'brand.showDetailsRow',
        'uses' => 'App\\Http\\Controllers\\Admin\\BrandCrudController@showDetailsRow',
        'operation' => 'list',
        'controller' => 'App\\Http\\Controllers\\Admin\\BrandCrudController@showDetailsRow',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'brand.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/brand/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'brand.create',
        'uses' => 'App\\Http\\Controllers\\Admin\\BrandCrudController@create',
        'operation' => 'create',
        'controller' => 'App\\Http\\Controllers\\Admin\\BrandCrudController@create',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'brand.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/brand',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'brand.store',
        'uses' => 'App\\Http\\Controllers\\Admin\\BrandCrudController@store',
        'operation' => 'create',
        'controller' => 'App\\Http\\Controllers\\Admin\\BrandCrudController@store',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'brand.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/brand/{id}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'brand.edit',
        'uses' => 'App\\Http\\Controllers\\Admin\\BrandCrudController@edit',
        'operation' => 'update',
        'controller' => 'App\\Http\\Controllers\\Admin\\BrandCrudController@edit',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'brand.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/brand/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'brand.update',
        'uses' => 'App\\Http\\Controllers\\Admin\\BrandCrudController@update',
        'operation' => 'update',
        'controller' => 'App\\Http\\Controllers\\Admin\\BrandCrudController@update',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'brand.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/brand/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'brand.destroy',
        'uses' => 'App\\Http\\Controllers\\Admin\\BrandCrudController@destroy',
        'operation' => 'delete',
        'controller' => 'App\\Http\\Controllers\\Admin\\BrandCrudController@destroy',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'brand.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/brand/{id}/show',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'brand.show',
        'uses' => 'App\\Http\\Controllers\\Admin\\BrandCrudController@show',
        'operation' => 'show',
        'controller' => 'App\\Http\\Controllers\\Admin\\BrandCrudController@show',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'unit.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/unit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'unit.index',
        'uses' => 'App\\Http\\Controllers\\Admin\\UnitCrudController@index',
        'operation' => 'list',
        'controller' => 'App\\Http\\Controllers\\Admin\\UnitCrudController@index',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'unit.search' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/unit/search',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'unit.search',
        'uses' => 'App\\Http\\Controllers\\Admin\\UnitCrudController@search',
        'operation' => 'list',
        'controller' => 'App\\Http\\Controllers\\Admin\\UnitCrudController@search',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'unit.showDetailsRow' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/unit/{id}/details',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'unit.showDetailsRow',
        'uses' => 'App\\Http\\Controllers\\Admin\\UnitCrudController@showDetailsRow',
        'operation' => 'list',
        'controller' => 'App\\Http\\Controllers\\Admin\\UnitCrudController@showDetailsRow',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'unit.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/unit/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'unit.create',
        'uses' => 'App\\Http\\Controllers\\Admin\\UnitCrudController@create',
        'operation' => 'create',
        'controller' => 'App\\Http\\Controllers\\Admin\\UnitCrudController@create',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'unit.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/unit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'unit.store',
        'uses' => 'App\\Http\\Controllers\\Admin\\UnitCrudController@store',
        'operation' => 'create',
        'controller' => 'App\\Http\\Controllers\\Admin\\UnitCrudController@store',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'unit.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/unit/{id}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'unit.edit',
        'uses' => 'App\\Http\\Controllers\\Admin\\UnitCrudController@edit',
        'operation' => 'update',
        'controller' => 'App\\Http\\Controllers\\Admin\\UnitCrudController@edit',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'unit.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/unit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'unit.update',
        'uses' => 'App\\Http\\Controllers\\Admin\\UnitCrudController@update',
        'operation' => 'update',
        'controller' => 'App\\Http\\Controllers\\Admin\\UnitCrudController@update',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'unit.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/unit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'unit.destroy',
        'uses' => 'App\\Http\\Controllers\\Admin\\UnitCrudController@destroy',
        'operation' => 'delete',
        'controller' => 'App\\Http\\Controllers\\Admin\\UnitCrudController@destroy',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'unit.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/unit/{id}/show',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'unit.show',
        'uses' => 'App\\Http\\Controllers\\Admin\\UnitCrudController@show',
        'operation' => 'show',
        'controller' => 'App\\Http\\Controllers\\Admin\\UnitCrudController@show',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'stackholder.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/stackholder',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'stackholder.index',
        'uses' => 'App\\Http\\Controllers\\Admin\\StackholderCrudController@index',
        'operation' => 'list',
        'controller' => 'App\\Http\\Controllers\\Admin\\StackholderCrudController@index',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'stackholder.search' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/stackholder/search',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'stackholder.search',
        'uses' => 'App\\Http\\Controllers\\Admin\\StackholderCrudController@search',
        'operation' => 'list',
        'controller' => 'App\\Http\\Controllers\\Admin\\StackholderCrudController@search',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'stackholder.showDetailsRow' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/stackholder/{id}/details',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'stackholder.showDetailsRow',
        'uses' => 'App\\Http\\Controllers\\Admin\\StackholderCrudController@showDetailsRow',
        'operation' => 'list',
        'controller' => 'App\\Http\\Controllers\\Admin\\StackholderCrudController@showDetailsRow',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'stackholder.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/stackholder/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'stackholder.create',
        'uses' => 'App\\Http\\Controllers\\Admin\\StackholderCrudController@create',
        'operation' => 'create',
        'controller' => 'App\\Http\\Controllers\\Admin\\StackholderCrudController@create',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'stackholder.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/stackholder',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'stackholder.store',
        'uses' => 'App\\Http\\Controllers\\Admin\\StackholderCrudController@store',
        'operation' => 'create',
        'controller' => 'App\\Http\\Controllers\\Admin\\StackholderCrudController@store',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'stackholder.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/stackholder/{id}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'stackholder.edit',
        'uses' => 'App\\Http\\Controllers\\Admin\\StackholderCrudController@edit',
        'operation' => 'update',
        'controller' => 'App\\Http\\Controllers\\Admin\\StackholderCrudController@edit',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'stackholder.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/stackholder/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'stackholder.update',
        'uses' => 'App\\Http\\Controllers\\Admin\\StackholderCrudController@update',
        'operation' => 'update',
        'controller' => 'App\\Http\\Controllers\\Admin\\StackholderCrudController@update',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'stackholder.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/stackholder/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'stackholder.destroy',
        'uses' => 'App\\Http\\Controllers\\Admin\\StackholderCrudController@destroy',
        'operation' => 'delete',
        'controller' => 'App\\Http\\Controllers\\Admin\\StackholderCrudController@destroy',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'stackholder.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/stackholder/{id}/show',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'stackholder.show',
        'uses' => 'App\\Http\\Controllers\\Admin\\StackholderCrudController@show',
        'operation' => 'show',
        'controller' => 'App\\Http\\Controllers\\Admin\\StackholderCrudController@show',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'salesorder.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/salesorder',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'salesorder.index',
        'uses' => 'App\\Http\\Controllers\\Admin\\SalesOrderCrudController@index',
        'operation' => 'list',
        'controller' => 'App\\Http\\Controllers\\Admin\\SalesOrderCrudController@index',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'salesorder.search' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/salesorder/search',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'salesorder.search',
        'uses' => 'App\\Http\\Controllers\\Admin\\SalesOrderCrudController@search',
        'operation' => 'list',
        'controller' => 'App\\Http\\Controllers\\Admin\\SalesOrderCrudController@search',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'salesorder.showDetailsRow' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/salesorder/{id}/details',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'salesorder.showDetailsRow',
        'uses' => 'App\\Http\\Controllers\\Admin\\SalesOrderCrudController@showDetailsRow',
        'operation' => 'list',
        'controller' => 'App\\Http\\Controllers\\Admin\\SalesOrderCrudController@showDetailsRow',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'salesorder.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/salesorder/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'salesorder.create',
        'uses' => 'App\\Http\\Controllers\\Admin\\SalesOrderCrudController@create',
        'operation' => 'create',
        'controller' => 'App\\Http\\Controllers\\Admin\\SalesOrderCrudController@create',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'salesorder.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/salesorder',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'salesorder.store',
        'uses' => 'App\\Http\\Controllers\\Admin\\SalesOrderCrudController@store',
        'operation' => 'create',
        'controller' => 'App\\Http\\Controllers\\Admin\\SalesOrderCrudController@store',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'salesorder.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/salesorder/{id}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'salesorder.edit',
        'uses' => 'App\\Http\\Controllers\\Admin\\SalesOrderCrudController@edit',
        'operation' => 'update',
        'controller' => 'App\\Http\\Controllers\\Admin\\SalesOrderCrudController@edit',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'salesorder.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/salesorder/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'salesorder.update',
        'uses' => 'App\\Http\\Controllers\\Admin\\SalesOrderCrudController@update',
        'operation' => 'update',
        'controller' => 'App\\Http\\Controllers\\Admin\\SalesOrderCrudController@update',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'salesorder.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/salesorder/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'salesorder.destroy',
        'uses' => 'App\\Http\\Controllers\\Admin\\SalesOrderCrudController@destroy',
        'operation' => 'delete',
        'controller' => 'App\\Http\\Controllers\\Admin\\SalesOrderCrudController@destroy',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'salesorder.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/salesorder/{id}/show',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'salesorder.show',
        'uses' => 'App\\Http\\Controllers\\Admin\\SalesOrderCrudController@show',
        'operation' => 'show',
        'controller' => 'App\\Http\\Controllers\\Admin\\SalesOrderCrudController@show',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::YHc6XJ0dq5aSs48T' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/salesorder-pic',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SalesOrderCrudController@storePic',
        'controller' => 'App\\Http\\Controllers\\Admin\\SalesOrderCrudController@storePic',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'generated::YHc6XJ0dq5aSs48T',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::cj7b6xMyzUd0GF47' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/salesorder/process',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SalesOrderCrudController@process',
        'controller' => 'App\\Http\\Controllers\\Admin\\SalesOrderCrudController@process',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'generated::cj7b6xMyzUd0GF47',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::LA5IK5vZZmkFRkZ2' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/salesorder/{id}/accept',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SalesOrderCrudController@acceptHeader',
        'controller' => 'App\\Http\\Controllers\\Admin\\SalesOrderCrudController@acceptHeader',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'generated::LA5IK5vZZmkFRkZ2',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::NhoLRS1iiP4J5T9m' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/salesorder/{id}/denied',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SalesOrderCrudController@deniedHeader',
        'controller' => 'App\\Http\\Controllers\\Admin\\SalesOrderCrudController@deniedHeader',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'generated::NhoLRS1iiP4J5T9m',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::kfyBGDHRBSgOUtOg' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/generate-so-pdf',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SalesOrderCrudController@pdf',
        'controller' => 'App\\Http\\Controllers\\Admin\\SalesOrderCrudController@pdf',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'generated::kfyBGDHRBSgOUtOg',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::p8GHF6M7aHuTFQNZ' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/generate-so-dn',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SalesOrderCrudController@dn',
        'controller' => 'App\\Http\\Controllers\\Admin\\SalesOrderCrudController@dn',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'generated::p8GHF6M7aHuTFQNZ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'salesorderdetail.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/salesorderdetail',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'salesorderdetail.index',
        'uses' => 'App\\Http\\Controllers\\Admin\\SalesOrderDetailCrudController@index',
        'operation' => 'list',
        'controller' => 'App\\Http\\Controllers\\Admin\\SalesOrderDetailCrudController@index',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'salesorderdetail.search' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/salesorderdetail/search',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'salesorderdetail.search',
        'uses' => 'App\\Http\\Controllers\\Admin\\SalesOrderDetailCrudController@search',
        'operation' => 'list',
        'controller' => 'App\\Http\\Controllers\\Admin\\SalesOrderDetailCrudController@search',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'salesorderdetail.showDetailsRow' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/salesorderdetail/{id}/details',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'salesorderdetail.showDetailsRow',
        'uses' => 'App\\Http\\Controllers\\Admin\\SalesOrderDetailCrudController@showDetailsRow',
        'operation' => 'list',
        'controller' => 'App\\Http\\Controllers\\Admin\\SalesOrderDetailCrudController@showDetailsRow',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'salesorderdetail.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/salesorderdetail/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'salesorderdetail.create',
        'uses' => 'App\\Http\\Controllers\\Admin\\SalesOrderDetailCrudController@create',
        'operation' => 'create',
        'controller' => 'App\\Http\\Controllers\\Admin\\SalesOrderDetailCrudController@create',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'salesorderdetail.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/salesorderdetail',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'salesorderdetail.store',
        'uses' => 'App\\Http\\Controllers\\Admin\\SalesOrderDetailCrudController@store',
        'operation' => 'create',
        'controller' => 'App\\Http\\Controllers\\Admin\\SalesOrderDetailCrudController@store',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'salesorderdetail.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/salesorderdetail/{id}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'salesorderdetail.edit',
        'uses' => 'App\\Http\\Controllers\\Admin\\SalesOrderDetailCrudController@edit',
        'operation' => 'update',
        'controller' => 'App\\Http\\Controllers\\Admin\\SalesOrderDetailCrudController@edit',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'salesorderdetail.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/salesorderdetail/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'salesorderdetail.update',
        'uses' => 'App\\Http\\Controllers\\Admin\\SalesOrderDetailCrudController@update',
        'operation' => 'update',
        'controller' => 'App\\Http\\Controllers\\Admin\\SalesOrderDetailCrudController@update',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'salesorderdetail.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/salesorderdetail/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'salesorderdetail.destroy',
        'uses' => 'App\\Http\\Controllers\\Admin\\SalesOrderDetailCrudController@destroy',
        'operation' => 'delete',
        'controller' => 'App\\Http\\Controllers\\Admin\\SalesOrderDetailCrudController@destroy',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'salesorderdetail.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/salesorderdetail/{id}/show',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'salesorderdetail.show',
        'uses' => 'App\\Http\\Controllers\\Admin\\SalesOrderDetailCrudController@show',
        'operation' => 'show',
        'controller' => 'App\\Http\\Controllers\\Admin\\SalesOrderDetailCrudController@show',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'salesdn.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/salesdn',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'salesdn.index',
        'uses' => 'App\\Http\\Controllers\\Admin\\SalesDnCrudController@index',
        'operation' => 'list',
        'controller' => 'App\\Http\\Controllers\\Admin\\SalesDnCrudController@index',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'salesdn.search' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/salesdn/search',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'salesdn.search',
        'uses' => 'App\\Http\\Controllers\\Admin\\SalesDnCrudController@search',
        'operation' => 'list',
        'controller' => 'App\\Http\\Controllers\\Admin\\SalesDnCrudController@search',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'salesdn.showDetailsRow' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/salesdn/{id}/details',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'salesdn.showDetailsRow',
        'uses' => 'App\\Http\\Controllers\\Admin\\SalesDnCrudController@showDetailsRow',
        'operation' => 'list',
        'controller' => 'App\\Http\\Controllers\\Admin\\SalesDnCrudController@showDetailsRow',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'salesdn.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/salesdn/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'salesdn.create',
        'uses' => 'App\\Http\\Controllers\\Admin\\SalesDnCrudController@create',
        'operation' => 'create',
        'controller' => 'App\\Http\\Controllers\\Admin\\SalesDnCrudController@create',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'salesdn.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/salesdn',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'salesdn.store',
        'uses' => 'App\\Http\\Controllers\\Admin\\SalesDnCrudController@store',
        'operation' => 'create',
        'controller' => 'App\\Http\\Controllers\\Admin\\SalesDnCrudController@store',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'salesdn.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/salesdn/{id}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'salesdn.edit',
        'uses' => 'App\\Http\\Controllers\\Admin\\SalesDnCrudController@edit',
        'operation' => 'update',
        'controller' => 'App\\Http\\Controllers\\Admin\\SalesDnCrudController@edit',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'salesdn.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/salesdn/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'salesdn.update',
        'uses' => 'App\\Http\\Controllers\\Admin\\SalesDnCrudController@update',
        'operation' => 'update',
        'controller' => 'App\\Http\\Controllers\\Admin\\SalesDnCrudController@update',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'salesdn.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/salesdn/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'salesdn.destroy',
        'uses' => 'App\\Http\\Controllers\\Admin\\SalesDnCrudController@destroy',
        'operation' => 'delete',
        'controller' => 'App\\Http\\Controllers\\Admin\\SalesDnCrudController@destroy',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'salesdn.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/salesdn/{id}/show',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'salesdn.show',
        'uses' => 'App\\Http\\Controllers\\Admin\\SalesDnCrudController@show',
        'operation' => 'show',
        'controller' => 'App\\Http\\Controllers\\Admin\\SalesDnCrudController@show',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::kwRJZG09qZSWu6SY' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/generate-dn-pdf',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\DeliveryNoteCrudController@pdf',
        'controller' => 'App\\Http\\Controllers\\Admin\\DeliveryNoteCrudController@pdf',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'generated::kwRJZG09qZSWu6SY',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::T7vPxbdKoQ62fVHP' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/generate-sdn-pdf',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SalesDnCrudController@pdf',
        'controller' => 'App\\Http\\Controllers\\Admin\\SalesDnCrudController@pdf',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'generated::T7vPxbdKoQ62fVHP',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'deliverynotedetail.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/deliverynotedetail',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'deliverynotedetail.index',
        'uses' => 'App\\Http\\Controllers\\Admin\\DeliveryNoteDetailCrudController@index',
        'operation' => 'list',
        'controller' => 'App\\Http\\Controllers\\Admin\\DeliveryNoteDetailCrudController@index',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'deliverynotedetail.search' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/deliverynotedetail/search',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'deliverynotedetail.search',
        'uses' => 'App\\Http\\Controllers\\Admin\\DeliveryNoteDetailCrudController@search',
        'operation' => 'list',
        'controller' => 'App\\Http\\Controllers\\Admin\\DeliveryNoteDetailCrudController@search',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'deliverynotedetail.showDetailsRow' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/deliverynotedetail/{id}/details',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'deliverynotedetail.showDetailsRow',
        'uses' => 'App\\Http\\Controllers\\Admin\\DeliveryNoteDetailCrudController@showDetailsRow',
        'operation' => 'list',
        'controller' => 'App\\Http\\Controllers\\Admin\\DeliveryNoteDetailCrudController@showDetailsRow',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'deliverynotedetail.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/deliverynotedetail/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'deliverynotedetail.create',
        'uses' => 'App\\Http\\Controllers\\Admin\\DeliveryNoteDetailCrudController@create',
        'operation' => 'create',
        'controller' => 'App\\Http\\Controllers\\Admin\\DeliveryNoteDetailCrudController@create',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'deliverynotedetail.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/deliverynotedetail',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'deliverynotedetail.store',
        'uses' => 'App\\Http\\Controllers\\Admin\\DeliveryNoteDetailCrudController@store',
        'operation' => 'create',
        'controller' => 'App\\Http\\Controllers\\Admin\\DeliveryNoteDetailCrudController@store',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'deliverynotedetail.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/deliverynotedetail/{id}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'deliverynotedetail.edit',
        'uses' => 'App\\Http\\Controllers\\Admin\\DeliveryNoteDetailCrudController@edit',
        'operation' => 'update',
        'controller' => 'App\\Http\\Controllers\\Admin\\DeliveryNoteDetailCrudController@edit',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'deliverynotedetail.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/deliverynotedetail/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'deliverynotedetail.update',
        'uses' => 'App\\Http\\Controllers\\Admin\\DeliveryNoteDetailCrudController@update',
        'operation' => 'update',
        'controller' => 'App\\Http\\Controllers\\Admin\\DeliveryNoteDetailCrudController@update',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'deliverynotedetail.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/deliverynotedetail/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'deliverynotedetail.destroy',
        'uses' => 'App\\Http\\Controllers\\Admin\\DeliveryNoteDetailCrudController@destroy',
        'operation' => 'delete',
        'controller' => 'App\\Http\\Controllers\\Admin\\DeliveryNoteDetailCrudController@destroy',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'deliverynotedetail.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/deliverynotedetail/{id}/show',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'deliverynotedetail.show',
        'uses' => 'App\\Http\\Controllers\\Admin\\DeliveryNoteDetailCrudController@show',
        'operation' => 'show',
        'controller' => 'App\\Http\\Controllers\\Admin\\DeliveryNoteDetailCrudController@show',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::c0WnTyWWzGucAPRy' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/salesorderdetail/{id}/accept',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SalesOrderDetailCrudController@accept',
        'controller' => 'App\\Http\\Controllers\\Admin\\SalesOrderDetailCrudController@accept',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'generated::c0WnTyWWzGucAPRy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::DuZO1mPxfyAhBS7s' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/salesorderdetail/{id}/denied',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SalesOrderDetailCrudController@denied',
        'controller' => 'App\\Http\\Controllers\\Admin\\SalesOrderDetailCrudController@denied',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'generated::DuZO1mPxfyAhBS7s',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::kWLKmNDb8d6RGb1j' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/deliverynotedetail/{id}/accept',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\DeliveryNoteDetailCrudController@accept',
        'controller' => 'App\\Http\\Controllers\\Admin\\DeliveryNoteDetailCrudController@accept',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'generated::kWLKmNDb8d6RGb1j',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::fgx5GONSOn8E3q8d' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/deliverynotedetail/{id}/denied',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\DeliveryNoteDetailCrudController@denied',
        'controller' => 'App\\Http\\Controllers\\Admin\\DeliveryNoteDetailCrudController@denied',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'generated::fgx5GONSOn8E3q8d',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::dFwCZkGioqpPgU0F' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/Api/SalesOrderDetail',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Api\\SalesOrderController@getSalesOrderDetailById',
        'controller' => 'App\\Http\\Controllers\\Admin\\Api\\SalesOrderController@getSalesOrderDetailById',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'generated::dFwCZkGioqpPgU0F',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::uMSjCDDClbzn4WOU' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/Api/SalesOrderDetail_update/{sales_order_detail_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Api\\SalesOrderController@UpdateSalesOrder',
        'controller' => 'App\\Http\\Controllers\\Admin\\Api\\SalesOrderController@UpdateSalesOrder',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'generated::uMSjCDDClbzn4WOU',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::Zj65IP4En9NRj3xj' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/Api/PurchaseOrderDetail',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Api\\PurchaseOrderController@getPurchaseOrderDetailById',
        'controller' => 'App\\Http\\Controllers\\Admin\\Api\\PurchaseOrderController@getPurchaseOrderDetailById',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'generated::Zj65IP4En9NRj3xj',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::NbbXWa3mUyg3yOwk' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/Api/DeliveryOrderDetail',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Api\\DeliveryOrderController@getDeliveryOrderDetailById',
        'controller' => 'App\\Http\\Controllers\\Admin\\Api\\DeliveryOrderController@getDeliveryOrderDetailById',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'generated::NbbXWa3mUyg3yOwk',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::37SYHMwnkAvABruK' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/Api/DeliveryOrderDetail_update/{delivery_order_detail_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Api\\DeliveryOrderController@UpdateDeliveryOrder',
        'controller' => 'App\\Http\\Controllers\\Admin\\Api\\DeliveryOrderController@UpdateDeliveryOrder',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'generated::37SYHMwnkAvABruK',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::Z39ywUxH3OKfnY6d' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/Api/SubmissionFormDetail',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Api\\SubmissionFormController@getSubmissionFormDetailById',
        'controller' => 'App\\Http\\Controllers\\Admin\\Api\\SubmissionFormController@getSubmissionFormDetailById',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'generated::Z39ywUxH3OKfnY6d',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::XAkullcs4ayvE9cI' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/Api/SubmissionFormDetail_update/{submission_form_detail_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Api\\SubmissionFormController@UpdateDeliveryOrder',
        'controller' => 'App\\Http\\Controllers\\Admin\\Api\\SubmissionFormController@UpdateDeliveryOrder',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'generated::XAkullcs4ayvE9cI',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::rXb05ZIzp2pYpfqF' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/Api/DeliverySODetail',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Api\\DeliverySalesOrderController@getDeliverySalesOrderById',
        'controller' => 'App\\Http\\Controllers\\Admin\\Api\\DeliverySalesOrderController@getDeliverySalesOrderById',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'generated::rXb05ZIzp2pYpfqF',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'bagitemwarehousein.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/bagitemwarehousein',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'bagitemwarehousein.index',
        'uses' => 'App\\Http\\Controllers\\Admin\\BagItemWarehouseInCrudController@index',
        'operation' => 'list',
        'controller' => 'App\\Http\\Controllers\\Admin\\BagItemWarehouseInCrudController@index',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'bagitemwarehousein.search' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/bagitemwarehousein/search',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'bagitemwarehousein.search',
        'uses' => 'App\\Http\\Controllers\\Admin\\BagItemWarehouseInCrudController@search',
        'operation' => 'list',
        'controller' => 'App\\Http\\Controllers\\Admin\\BagItemWarehouseInCrudController@search',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'bagitemwarehousein.showDetailsRow' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/bagitemwarehousein/{id}/details',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'bagitemwarehousein.showDetailsRow',
        'uses' => 'App\\Http\\Controllers\\Admin\\BagItemWarehouseInCrudController@showDetailsRow',
        'operation' => 'list',
        'controller' => 'App\\Http\\Controllers\\Admin\\BagItemWarehouseInCrudController@showDetailsRow',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'bagitemwarehousein.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/bagitemwarehousein/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'bagitemwarehousein.create',
        'uses' => 'App\\Http\\Controllers\\Admin\\BagItemWarehouseInCrudController@create',
        'operation' => 'create',
        'controller' => 'App\\Http\\Controllers\\Admin\\BagItemWarehouseInCrudController@create',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'bagitemwarehousein.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/bagitemwarehousein',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'bagitemwarehousein.store',
        'uses' => 'App\\Http\\Controllers\\Admin\\BagItemWarehouseInCrudController@store',
        'operation' => 'create',
        'controller' => 'App\\Http\\Controllers\\Admin\\BagItemWarehouseInCrudController@store',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'bagitemwarehousein.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/bagitemwarehousein/{id}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'bagitemwarehousein.edit',
        'uses' => 'App\\Http\\Controllers\\Admin\\BagItemWarehouseInCrudController@edit',
        'operation' => 'update',
        'controller' => 'App\\Http\\Controllers\\Admin\\BagItemWarehouseInCrudController@edit',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'bagitemwarehousein.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/bagitemwarehousein/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'bagitemwarehousein.update',
        'uses' => 'App\\Http\\Controllers\\Admin\\BagItemWarehouseInCrudController@update',
        'operation' => 'update',
        'controller' => 'App\\Http\\Controllers\\Admin\\BagItemWarehouseInCrudController@update',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'bagitemwarehousein.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/bagitemwarehousein/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'bagitemwarehousein.destroy',
        'uses' => 'App\\Http\\Controllers\\Admin\\BagItemWarehouseInCrudController@destroy',
        'operation' => 'delete',
        'controller' => 'App\\Http\\Controllers\\Admin\\BagItemWarehouseInCrudController@destroy',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'bagitemwarehousein.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/bagitemwarehousein/{id}/show',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'bagitemwarehousein.show',
        'uses' => 'App\\Http\\Controllers\\Admin\\BagItemWarehouseInCrudController@show',
        'operation' => 'show',
        'controller' => 'App\\Http\\Controllers\\Admin\\BagItemWarehouseInCrudController@show',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::MByNBQlhQeYarRnn' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/bagitemwarehousein/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\BagItemWarehouseInCrudController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\BagItemWarehouseInCrudController@edit',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'generated::MByNBQlhQeYarRnn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::2BUSELsYlPbrFgJs' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/bagitemwarehousein/qc',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\BagItemWarehouseInCrudController@qc',
        'controller' => 'App\\Http\\Controllers\\Admin\\BagItemWarehouseInCrudController@qc',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'generated::2BUSELsYlPbrFgJs',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'bagitemwarehouseout.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/bagitemwarehouseout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'bagitemwarehouseout.index',
        'uses' => 'App\\Http\\Controllers\\Admin\\BagItemWarehouseOutCrudController@index',
        'operation' => 'list',
        'controller' => 'App\\Http\\Controllers\\Admin\\BagItemWarehouseOutCrudController@index',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'bagitemwarehouseout.search' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/bagitemwarehouseout/search',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'bagitemwarehouseout.search',
        'uses' => 'App\\Http\\Controllers\\Admin\\BagItemWarehouseOutCrudController@search',
        'operation' => 'list',
        'controller' => 'App\\Http\\Controllers\\Admin\\BagItemWarehouseOutCrudController@search',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'bagitemwarehouseout.showDetailsRow' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/bagitemwarehouseout/{id}/details',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'bagitemwarehouseout.showDetailsRow',
        'uses' => 'App\\Http\\Controllers\\Admin\\BagItemWarehouseOutCrudController@showDetailsRow',
        'operation' => 'list',
        'controller' => 'App\\Http\\Controllers\\Admin\\BagItemWarehouseOutCrudController@showDetailsRow',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'bagitemwarehouseout.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/bagitemwarehouseout/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'bagitemwarehouseout.create',
        'uses' => 'App\\Http\\Controllers\\Admin\\BagItemWarehouseOutCrudController@create',
        'operation' => 'create',
        'controller' => 'App\\Http\\Controllers\\Admin\\BagItemWarehouseOutCrudController@create',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'bagitemwarehouseout.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/bagitemwarehouseout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'bagitemwarehouseout.store',
        'uses' => 'App\\Http\\Controllers\\Admin\\BagItemWarehouseOutCrudController@store',
        'operation' => 'create',
        'controller' => 'App\\Http\\Controllers\\Admin\\BagItemWarehouseOutCrudController@store',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'bagitemwarehouseout.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/bagitemwarehouseout/{id}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'bagitemwarehouseout.edit',
        'uses' => 'App\\Http\\Controllers\\Admin\\BagItemWarehouseOutCrudController@edit',
        'operation' => 'update',
        'controller' => 'App\\Http\\Controllers\\Admin\\BagItemWarehouseOutCrudController@edit',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'bagitemwarehouseout.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/bagitemwarehouseout/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'bagitemwarehouseout.update',
        'uses' => 'App\\Http\\Controllers\\Admin\\BagItemWarehouseOutCrudController@update',
        'operation' => 'update',
        'controller' => 'App\\Http\\Controllers\\Admin\\BagItemWarehouseOutCrudController@update',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'bagitemwarehouseout.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/bagitemwarehouseout/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'bagitemwarehouseout.destroy',
        'uses' => 'App\\Http\\Controllers\\Admin\\BagItemWarehouseOutCrudController@destroy',
        'operation' => 'delete',
        'controller' => 'App\\Http\\Controllers\\Admin\\BagItemWarehouseOutCrudController@destroy',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'bagitemwarehouseout.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/bagitemwarehouseout/{id}/show',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'bagitemwarehouseout.show',
        'uses' => 'App\\Http\\Controllers\\Admin\\BagItemWarehouseOutCrudController@show',
        'operation' => 'show',
        'controller' => 'App\\Http\\Controllers\\Admin\\BagItemWarehouseOutCrudController@show',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'submissionform.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/submissionform',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'submissionform.index',
        'uses' => 'App\\Http\\Controllers\\Admin\\SubmissionFormCrudController@index',
        'operation' => 'list',
        'controller' => 'App\\Http\\Controllers\\Admin\\SubmissionFormCrudController@index',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'submissionform.search' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/submissionform/search',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'submissionform.search',
        'uses' => 'App\\Http\\Controllers\\Admin\\SubmissionFormCrudController@search',
        'operation' => 'list',
        'controller' => 'App\\Http\\Controllers\\Admin\\SubmissionFormCrudController@search',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'submissionform.showDetailsRow' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/submissionform/{id}/details',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'submissionform.showDetailsRow',
        'uses' => 'App\\Http\\Controllers\\Admin\\SubmissionFormCrudController@showDetailsRow',
        'operation' => 'list',
        'controller' => 'App\\Http\\Controllers\\Admin\\SubmissionFormCrudController@showDetailsRow',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'submissionform.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/submissionform/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'submissionform.create',
        'uses' => 'App\\Http\\Controllers\\Admin\\SubmissionFormCrudController@create',
        'operation' => 'create',
        'controller' => 'App\\Http\\Controllers\\Admin\\SubmissionFormCrudController@create',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'submissionform.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/submissionform',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'submissionform.store',
        'uses' => 'App\\Http\\Controllers\\Admin\\SubmissionFormCrudController@store',
        'operation' => 'create',
        'controller' => 'App\\Http\\Controllers\\Admin\\SubmissionFormCrudController@store',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'submissionform.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/submissionform/{id}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'submissionform.edit',
        'uses' => 'App\\Http\\Controllers\\Admin\\SubmissionFormCrudController@edit',
        'operation' => 'update',
        'controller' => 'App\\Http\\Controllers\\Admin\\SubmissionFormCrudController@edit',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'submissionform.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/submissionform/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'submissionform.update',
        'uses' => 'App\\Http\\Controllers\\Admin\\SubmissionFormCrudController@update',
        'operation' => 'update',
        'controller' => 'App\\Http\\Controllers\\Admin\\SubmissionFormCrudController@update',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'submissionform.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/submissionform/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'submissionform.destroy',
        'uses' => 'App\\Http\\Controllers\\Admin\\SubmissionFormCrudController@destroy',
        'operation' => 'delete',
        'controller' => 'App\\Http\\Controllers\\Admin\\SubmissionFormCrudController@destroy',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'submissionform.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/submissionform/{id}/show',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'submissionform.show',
        'uses' => 'App\\Http\\Controllers\\Admin\\SubmissionFormCrudController@show',
        'operation' => 'show',
        'controller' => 'App\\Http\\Controllers\\Admin\\SubmissionFormCrudController@show',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::WgTD4RWKVE5hEoBy' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/generate-sf-pdf',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SubmissionFormCrudController@pdf',
        'controller' => 'App\\Http\\Controllers\\Admin\\SubmissionFormCrudController@pdf',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'generated::WgTD4RWKVE5hEoBy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'submissionformdetail.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/submissionformdetail',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'submissionformdetail.index',
        'uses' => 'App\\Http\\Controllers\\Admin\\SubmissionFormDetailCrudController@index',
        'operation' => 'list',
        'controller' => 'App\\Http\\Controllers\\Admin\\SubmissionFormDetailCrudController@index',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'submissionformdetail.search' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/submissionformdetail/search',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'submissionformdetail.search',
        'uses' => 'App\\Http\\Controllers\\Admin\\SubmissionFormDetailCrudController@search',
        'operation' => 'list',
        'controller' => 'App\\Http\\Controllers\\Admin\\SubmissionFormDetailCrudController@search',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'submissionformdetail.showDetailsRow' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/submissionformdetail/{id}/details',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'submissionformdetail.showDetailsRow',
        'uses' => 'App\\Http\\Controllers\\Admin\\SubmissionFormDetailCrudController@showDetailsRow',
        'operation' => 'list',
        'controller' => 'App\\Http\\Controllers\\Admin\\SubmissionFormDetailCrudController@showDetailsRow',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'submissionformdetail.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/submissionformdetail/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'submissionformdetail.create',
        'uses' => 'App\\Http\\Controllers\\Admin\\SubmissionFormDetailCrudController@create',
        'operation' => 'create',
        'controller' => 'App\\Http\\Controllers\\Admin\\SubmissionFormDetailCrudController@create',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'submissionformdetail.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/submissionformdetail',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'submissionformdetail.store',
        'uses' => 'App\\Http\\Controllers\\Admin\\SubmissionFormDetailCrudController@store',
        'operation' => 'create',
        'controller' => 'App\\Http\\Controllers\\Admin\\SubmissionFormDetailCrudController@store',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'submissionformdetail.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/submissionformdetail/{id}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'submissionformdetail.edit',
        'uses' => 'App\\Http\\Controllers\\Admin\\SubmissionFormDetailCrudController@edit',
        'operation' => 'update',
        'controller' => 'App\\Http\\Controllers\\Admin\\SubmissionFormDetailCrudController@edit',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'submissionformdetail.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/submissionformdetail/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'submissionformdetail.update',
        'uses' => 'App\\Http\\Controllers\\Admin\\SubmissionFormDetailCrudController@update',
        'operation' => 'update',
        'controller' => 'App\\Http\\Controllers\\Admin\\SubmissionFormDetailCrudController@update',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'submissionformdetail.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/submissionformdetail/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'submissionformdetail.destroy',
        'uses' => 'App\\Http\\Controllers\\Admin\\SubmissionFormDetailCrudController@destroy',
        'operation' => 'delete',
        'controller' => 'App\\Http\\Controllers\\Admin\\SubmissionFormDetailCrudController@destroy',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'submissionformdetail.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/submissionformdetail/{id}/show',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'submissionformdetail.show',
        'uses' => 'App\\Http\\Controllers\\Admin\\SubmissionFormDetailCrudController@show',
        'operation' => 'show',
        'controller' => 'App\\Http\\Controllers\\Admin\\SubmissionFormDetailCrudController@show',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::5UtFR6SfBuo2ssGt' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/submissionformdetail/{id}/accept',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SubmissionFormDetailCrudController@accept',
        'controller' => 'App\\Http\\Controllers\\Admin\\SubmissionFormDetailCrudController@accept',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'generated::5UtFR6SfBuo2ssGt',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::qZMcDrzaADE5UF8u' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/submissionformdetail/{id}/denied',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SubmissionFormDetailCrudController@denied',
        'controller' => 'App\\Http\\Controllers\\Admin\\SubmissionFormDetailCrudController@denied',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'generated::qZMcDrzaADE5UF8u',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'gudang.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/gudang',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'gudang.index',
        'uses' => 'App\\Http\\Controllers\\Admin\\WarehouseCrudController@index',
        'operation' => 'list',
        'controller' => 'App\\Http\\Controllers\\Admin\\WarehouseCrudController@index',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'gudang.search' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/gudang/search',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'gudang.search',
        'uses' => 'App\\Http\\Controllers\\Admin\\WarehouseCrudController@search',
        'operation' => 'list',
        'controller' => 'App\\Http\\Controllers\\Admin\\WarehouseCrudController@search',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'gudang.showDetailsRow' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/gudang/{id}/details',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'gudang.showDetailsRow',
        'uses' => 'App\\Http\\Controllers\\Admin\\WarehouseCrudController@showDetailsRow',
        'operation' => 'list',
        'controller' => 'App\\Http\\Controllers\\Admin\\WarehouseCrudController@showDetailsRow',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'gudang.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/gudang/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'gudang.create',
        'uses' => 'App\\Http\\Controllers\\Admin\\WarehouseCrudController@create',
        'operation' => 'create',
        'controller' => 'App\\Http\\Controllers\\Admin\\WarehouseCrudController@create',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'gudang.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/gudang',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'gudang.store',
        'uses' => 'App\\Http\\Controllers\\Admin\\WarehouseCrudController@store',
        'operation' => 'create',
        'controller' => 'App\\Http\\Controllers\\Admin\\WarehouseCrudController@store',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'gudang.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/gudang/{id}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'gudang.edit',
        'uses' => 'App\\Http\\Controllers\\Admin\\WarehouseCrudController@edit',
        'operation' => 'update',
        'controller' => 'App\\Http\\Controllers\\Admin\\WarehouseCrudController@edit',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'gudang.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/gudang/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'gudang.update',
        'uses' => 'App\\Http\\Controllers\\Admin\\WarehouseCrudController@update',
        'operation' => 'update',
        'controller' => 'App\\Http\\Controllers\\Admin\\WarehouseCrudController@update',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'gudang.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/gudang/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'gudang.destroy',
        'uses' => 'App\\Http\\Controllers\\Admin\\WarehouseCrudController@destroy',
        'operation' => 'delete',
        'controller' => 'App\\Http\\Controllers\\Admin\\WarehouseCrudController@destroy',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'gudang.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/gudang/{id}/show',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'gudang.show',
        'uses' => 'App\\Http\\Controllers\\Admin\\WarehouseCrudController@show',
        'operation' => 'show',
        'controller' => 'App\\Http\\Controllers\\Admin\\WarehouseCrudController@show',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'permission.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/permission',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'permission.index',
        'uses' => 'Backpack\\PermissionManager\\app\\Http\\Controllers\\PermissionCrudController@index',
        'operation' => 'list',
        'controller' => 'Backpack\\PermissionManager\\app\\Http\\Controllers\\PermissionCrudController@index',
        'namespace' => 'Backpack\\PermissionManager\\app\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'permission.search' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/permission/search',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'permission.search',
        'uses' => 'Backpack\\PermissionManager\\app\\Http\\Controllers\\PermissionCrudController@search',
        'operation' => 'list',
        'controller' => 'Backpack\\PermissionManager\\app\\Http\\Controllers\\PermissionCrudController@search',
        'namespace' => 'Backpack\\PermissionManager\\app\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'permission.showDetailsRow' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/permission/{id}/details',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'permission.showDetailsRow',
        'uses' => 'Backpack\\PermissionManager\\app\\Http\\Controllers\\PermissionCrudController@showDetailsRow',
        'operation' => 'list',
        'controller' => 'Backpack\\PermissionManager\\app\\Http\\Controllers\\PermissionCrudController@showDetailsRow',
        'namespace' => 'Backpack\\PermissionManager\\app\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'permission.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/permission/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'permission.create',
        'uses' => 'Backpack\\PermissionManager\\app\\Http\\Controllers\\PermissionCrudController@create',
        'operation' => 'create',
        'controller' => 'Backpack\\PermissionManager\\app\\Http\\Controllers\\PermissionCrudController@create',
        'namespace' => 'Backpack\\PermissionManager\\app\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'permission.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/permission',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'permission.store',
        'uses' => 'Backpack\\PermissionManager\\app\\Http\\Controllers\\PermissionCrudController@store',
        'operation' => 'create',
        'controller' => 'Backpack\\PermissionManager\\app\\Http\\Controllers\\PermissionCrudController@store',
        'namespace' => 'Backpack\\PermissionManager\\app\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'permission.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/permission/{id}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'permission.edit',
        'uses' => 'Backpack\\PermissionManager\\app\\Http\\Controllers\\PermissionCrudController@edit',
        'operation' => 'update',
        'controller' => 'Backpack\\PermissionManager\\app\\Http\\Controllers\\PermissionCrudController@edit',
        'namespace' => 'Backpack\\PermissionManager\\app\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'permission.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/permission/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'permission.update',
        'uses' => 'Backpack\\PermissionManager\\app\\Http\\Controllers\\PermissionCrudController@update',
        'operation' => 'update',
        'controller' => 'Backpack\\PermissionManager\\app\\Http\\Controllers\\PermissionCrudController@update',
        'namespace' => 'Backpack\\PermissionManager\\app\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'permission.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/permission/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'permission.destroy',
        'uses' => 'Backpack\\PermissionManager\\app\\Http\\Controllers\\PermissionCrudController@destroy',
        'operation' => 'delete',
        'controller' => 'Backpack\\PermissionManager\\app\\Http\\Controllers\\PermissionCrudController@destroy',
        'namespace' => 'Backpack\\PermissionManager\\app\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'user.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/user',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'user.index',
        'uses' => 'Backpack\\PermissionManager\\app\\Http\\Controllers\\UserCrudController@index',
        'operation' => 'list',
        'controller' => 'Backpack\\PermissionManager\\app\\Http\\Controllers\\UserCrudController@index',
        'namespace' => 'Backpack\\PermissionManager\\app\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'user.search' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/user/search',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'user.search',
        'uses' => 'Backpack\\PermissionManager\\app\\Http\\Controllers\\UserCrudController@search',
        'operation' => 'list',
        'controller' => 'Backpack\\PermissionManager\\app\\Http\\Controllers\\UserCrudController@search',
        'namespace' => 'Backpack\\PermissionManager\\app\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'user.showDetailsRow' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/user/{id}/details',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'user.showDetailsRow',
        'uses' => 'Backpack\\PermissionManager\\app\\Http\\Controllers\\UserCrudController@showDetailsRow',
        'operation' => 'list',
        'controller' => 'Backpack\\PermissionManager\\app\\Http\\Controllers\\UserCrudController@showDetailsRow',
        'namespace' => 'Backpack\\PermissionManager\\app\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'user.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/user/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'user.create',
        'uses' => 'Backpack\\PermissionManager\\app\\Http\\Controllers\\UserCrudController@create',
        'operation' => 'create',
        'controller' => 'Backpack\\PermissionManager\\app\\Http\\Controllers\\UserCrudController@create',
        'namespace' => 'Backpack\\PermissionManager\\app\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'user.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/user',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'user.store',
        'uses' => 'Backpack\\PermissionManager\\app\\Http\\Controllers\\UserCrudController@store',
        'operation' => 'create',
        'controller' => 'Backpack\\PermissionManager\\app\\Http\\Controllers\\UserCrudController@store',
        'namespace' => 'Backpack\\PermissionManager\\app\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'user.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/user/{id}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'user.edit',
        'uses' => 'Backpack\\PermissionManager\\app\\Http\\Controllers\\UserCrudController@edit',
        'operation' => 'update',
        'controller' => 'Backpack\\PermissionManager\\app\\Http\\Controllers\\UserCrudController@edit',
        'namespace' => 'Backpack\\PermissionManager\\app\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'user.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/user/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'user.update',
        'uses' => 'Backpack\\PermissionManager\\app\\Http\\Controllers\\UserCrudController@update',
        'operation' => 'update',
        'controller' => 'Backpack\\PermissionManager\\app\\Http\\Controllers\\UserCrudController@update',
        'namespace' => 'Backpack\\PermissionManager\\app\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'user.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/user/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'user.destroy',
        'uses' => 'Backpack\\PermissionManager\\app\\Http\\Controllers\\UserCrudController@destroy',
        'operation' => 'delete',
        'controller' => 'Backpack\\PermissionManager\\app\\Http\\Controllers\\UserCrudController@destroy',
        'namespace' => 'Backpack\\PermissionManager\\app\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::YujVbdi0HQaXafCw' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/user',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'C:32:"Opis\\Closure\\SerializableClosure":291:{@hYEESkP9ZVjvByImz6NOHNyoY+H9llaEY0wAzPFScbQ=.a:5:{s:3:"use";a:0:{}s:8:"function";s:79:"function (\\Illuminate\\Http\\Request $request) {
    return $request->user();
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"000000000db007340000000028d88beb";}}',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::YujVbdi0HQaXafCw',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::YuKYsag14045Z5eV' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/admin/item_bagpack',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'Admin\\ApiController@itemToBag',
        'controller' => 'Admin\\ApiController@itemToBag',
        'namespace' => NULL,
        'prefix' => 'api/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::YuKYsag14045Z5eV',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::yN4KatAv0nQVjoLg' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
        2 => 'POST',
        3 => 'PUT',
        4 => 'PATCH',
        5 => 'DELETE',
        6 => 'OPTIONS',
      ),
      'uri' => '/',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'uses' => '\\Illuminate\\Routing\\RedirectController@__invoke',
        'controller' => '\\Illuminate\\Routing\\RedirectController',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::yN4KatAv0nQVjoLg',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        'destination' => '/admin/dashboard',
        'status' => 302,
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::47uYDb2U6YWTZq68' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
        2 => 'POST',
        3 => 'PUT',
        4 => 'PATCH',
        5 => 'DELETE',
        6 => 'OPTIONS',
      ),
      'uri' => 'home',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'uses' => '\\Illuminate\\Routing\\RedirectController@__invoke',
        'controller' => '\\Illuminate\\Routing\\RedirectController',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::47uYDb2U6YWTZq68',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        'destination' => '/admin/dashboard',
        'status' => 302,
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
  ),
)
);
