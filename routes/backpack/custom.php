<?php

// --------------------------
// Custom Backpack Routes
// --------------------------
// This route file is loaded automatically by Backpack\Base.
// Routes you generate using Backpack\Generators will be placed here.

use App\Http\Controllers\Admin\Api\SalesOrderController;
use App\Http\Controllers\Admin\Api\DeliveryOrderController;
use App\Http\Controllers\Admin\Api\PurchaseOrderController;
use App\Http\Controllers\Admin\Api\SalesDeliveryNoteController;
use App\Http\Controllers\Admin\Api\DeliverySalesOrderController;
use App\Http\Controllers\Admin\Api\SubmissionFormController;
use App\Models\SubmissionForm;

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
    Route::post('warehouseout/process', 'WarehouseOutCrudController@process');
    Route::get('delivery-order/{id}/accept', 'WarehouseOutCrudController@accept');
    Route::get('delivery-order/{id}/denied', 'WarehouseOutCrudController@denied');
    Route::get('deliveryorder/{id}/accept', 'WarehouseOutCrudController@acceptHeader');
    Route::get('deliveryorder/{id}/denied', 'WarehouseOutCrudController@deniedHeader');


    // In
    Route::crud('warehousein', 'WarehouseInCrudController');
    Route::post('warehousein/process', 'WarehouseInCrudController@process');
    Route::post('warehousein-pic', 'WarehouseInCrudController@storePic');
    Route::post('generate-po-pdf', 'WarehouseInCrudController@pdf');
    Route::post('item_to-bag_in', 'ApiController@itemToBagIn');
    Route::get('item_on-bag_in', 'ApiController@checkItemOnBagInById');
    Route::post('delete-item_on-bag_in', 'ApiController@deleteItemOnBagIn');
    Route::get('purchase-order/{id}/accept', 'WarehouseInCrudController@accept');
    Route::get('purchase-order/{id}/denied', 'WarehouseInCrudController@denied');
    Route::get('purchaseorder/{id}/accept', 'WarehouseInCrudController@acceptHeader');
    Route::get('purchaseorder/{id}/denied', 'WarehouseInCrudController@deniedHeader');


    //Delivery Note
    Route::crud('deliverynote', 'DeliveryNoteCrudController');
    Route::get('deliverynote/{warehouse_out_id}', 'DeliveryNoteCrudController@generateDeliveryNote');
    Route::get('deliverynote/{id}/pdf', 'DeliveryNoteCrudController@pdf');
    Route::post('deliverynote/process', 'DeliveryNoteCrudController@process');

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
    Route::post('salesorder/process', 'SalesOrderCrudController@process');
    Route::get('salesorder/{id}/accept', 'SalesOrderCrudController@acceptHeader');
    Route::get('salesorder/{id}/denied', 'SalesOrderCrudController@deniedHeader');
    Route::post('generate-so-pdf', 'SalesOrderCrudController@pdf');
    Route::post('generate-so-dn', 'SalesOrderCrudController@dn');
    Route::crud('salesorderdetail', 'SalesOrderDetailCrudController');
    Route::crud('salesdn', 'SalesDnCrudController');
    Route::post('generate-dn-pdf', 'DeliveryNoteCrudController@pdf');
    Route::post('generate-sdn-pdf', 'SalesDnCrudController@pdf');
    Route::crud('deliverynotedetail', 'DeliveryNoteDetailCrudController');
    Route::get('salesorderdetail/{id}/accept', 'SalesOrderDetailCrudController@accept');
    Route::get('salesorderdetail/{id}/denied', 'SalesOrderDetailCrudController@denied');
    Route::get('deliverynotedetail/{id}/accept', 'DeliveryNoteDetailCrudController@accept');
    Route::get('deliverynotedetail/{id}/denied', 'DeliveryNoteDetailCrudController@denied');





    // API

    // Sales Order
    Route::post('Api/SalesOrderDetail', [SalesOrderController::class, 'getSalesOrderDetailById']);
    Route::post('Api/SalesOrderDetail_update/{sales_order_detail_id}', [SalesOrderController::class, 'UpdateSalesOrder']);

    // Purchase Order
    Route::post('Api/PurchaseOrderDetail', [PurchaseOrderController::class, 'getPurchaseOrderDetailById']);
    // Route::post('Api/PurchaseOrderDetail_update/{purchase_order_detail_id}', [PurchaseOrderController::class, 'UpdatePurchaseOrder']);

    // Delivery Order
    Route::post('Api/DeliveryOrderDetail', [DeliveryOrderController::class, 'getDeliveryOrderDetailById']);
    Route::post('Api/DeliveryOrderDetail_update/{delivery_order_detail_id}', [DeliveryOrderController::class, 'UpdateDeliveryOrder']);

    // Submission Form
    Route::post('Api/SubmissionFormDetail', [SubmissionFormController::class, 'getSubmissionFormDetailById']);
    Route::post('Api/SubmissionFormDetail_update/{submission_form_detail_id}', [SubmissionFormController::class, 'UpdateDeliveryOrder']);


    Route::post('Api/DeliverySODetail', [DeliverySalesOrderController::class, 'getDeliverySalesOrderById']);





    Route::crud('bagitemwarehousein', 'BagItemWarehouseInCrudController');
    Route::post('bagitemwarehousein/edit', 'BagItemWarehouseInCrudController@edit');
    Route::post('bagitemwarehousein/qc', 'BagItemWarehouseInCrudController@qc');
    Route::crud('bagitemwarehouseout', 'BagItemWarehouseOutCrudController');
    Route::crud('submissionform', 'SubmissionFormCrudController');
    Route::post('generate-sf-pdf', 'SubmissionFormCrudController@pdf');
    Route::crud('submissionformdetail', 'SubmissionFormDetailCrudController');
    Route::get('submissionformdetail/{id}/accept', 'SubmissionFormDetailCrudController@accept');
    Route::get('submissionformdetail/{id}/denied', 'SubmissionFormDetailCrudController@denied');
    Route::crud('gudang', 'WarehouseCrudController');
}); // this should be the absolute last line of this file
