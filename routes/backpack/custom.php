<?php

// --------------------------
// Custom Backpack Routes
// --------------------------
// This route file is loaded automatically by Backpack\Base.
// Routes you generate using Backpack\Generators will be placed here.

use App\Http\Controllers\Admin\Api\SalesOrderController;

Route::group([
    'prefix'     => config('backpack.base.route_prefix', 'admin'),
    'middleware' => array_merge(
        (array) config('backpack.base.web_middleware', 'web'),
        (array) config('backpack.base.middleware_key', 'admin')
    ),
    'namespace'  => 'App\Http\Controllers\Admin',
], function () { // custom admin routes
    //dashboard
    Route::get('dashboard', 'AdminController@dashboard')->name('backpack.dashboard');
    Route::get('charts/purchase-order', 'Charts\PurchaseOrderChartController@response')->name('charts.purchase-order.index');
    Route::get('charts/counter', 'Charts\CounterChartController@response')->name('charts.counter.index');

    // Out
    Route::crud('warehouseout', 'WarehouseOutCrudController');
    Route::post('generate-do-pdf', 'WarehouseOutCrudController@pdf');
    Route::post('item_to-bag', 'ApiController@itemToBag');
    Route::get('item_on-bag', 'ApiController@checkItemOnBagById');
    Route::post('delete-item_on-bag', 'ApiController@deleteItemOnBag');
    Route::post('accept', 'ApiController@accept');
    Route::post('decline', 'ApiController@decline');
    Route::post('warehouseout-pic', 'WarehouseOutCrudController@storePic');

    // In
    Route::crud('warehousein', 'WarehouseInCrudController');
    Route::post('warehousein-pic', 'WarehouseInCrudController@storePic');
    Route::post('generate-po-pdf', 'WarehouseInCrudController@pdf');
    Route::post('item_to-bag_in', 'ApiController@itemToBagIn');
    Route::get('item_on-bag_in', 'ApiController@checkItemOnBagInById');
    Route::post('delete-item_on-bag_in', 'ApiController@deleteItemOnBagIn');
    Route::post('accept-po', 'ApiController@acceptPO');
    Route::post('decline-po', 'ApiController@declinePO');

    //Delivery Note
    Route::crud('deliverynote', 'DeliveryNoteCrudController');
    Route::get('deliverynote/{warehouse_out_id}', 'DeliveryNoteCrudController@generateDeliveryNote');
    Route::get('deliverynote/{id}/pdf', 'DeliveryNoteCrudController@pdf');

    //Data Master
    Route::crud('item', 'ItemCrudController');
    Route::crud('company', 'CompanyCrudController');
    Route::crud('role', 'RoleCrudController');
    Route::crud('category', 'CategoryCrudController');
    Route::crud('brand', 'BrandCrudController');
    Route::crud('unit', 'UnitCrudController');
    Route::crud('stackholder', 'StackholderCrudController');
    Route::crud('salesorder', 'SalesOrderCrudController');
    Route::post('salesorder-pic', 'SalesOrderCrudController@storePic');
    Route::post('generate-so-pdf', 'SalesOrderCrudController@pdf');
    Route::post('generate-so-dn', 'SalesOrderCrudController@dn');
    Route::crud('salesorderdetail', 'SalesOrderDetailCrudController');
    Route::crud('salesdn', 'SalesDnCrudController');
    Route::post('generate-dn-pdf', 'DeliveryNoteCrudController@pdf');
    Route::crud('deliverynotedetail', 'DeliveryNoteDetailCrudController');





    // API
    Route::post('Api/SalesOrderDetail', [SalesOrderController::class, 'getSalesOrderDetailById']);
    Route::post('Api/SalesOrderDetail_update/{sales_order_detail_id}', [SalesOrderController::class, 'UpdateSalesOrder']);


    Route::crud('bagitemwarehousein', 'BagItemWarehouseInCrudController');
    Route::crud('bagitemwarehouseout', 'BagItemWarehouseOutCrudController');
}); // this should be the absolute last line of this file
