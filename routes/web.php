<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserPermissionController;
use App\Http\Controllers\BasicController;
use App\Http\Controllers\WebsiteController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\AccountItemUnitController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
    // return view('index');
});

Route::get('/dashboard', function () {
    return view('admin.dashboard');
    // return view('index');
})->middleware(['auth'])->name('dashboard');

Route::get('/', [WebsiteController::class, 'index'])->name('home');
Route::get('add-to-cart/{id?}', [WebsiteController::class, 'addToCart'])->name('add.to.cart');
Route::get('add-to-cart-two/{id?}/{size_id?}', [WebsiteController::class, 'addToCartTwo'])->name('add.to.cart.two');
Route::get('get/total/cart', [WebsiteController::class, 'getTotalcart'])->name('get.total.cart');
Route::get('cart', [WebsiteController::class, 'cart'])->name('cart');
Route::patch('update-cart', [WebsiteController::class, 'update'])->name('update.cart');
Route::delete('remove-from-cart', [WebsiteController::class, 'remove'])->name('remove.from.cart');
Route::get('checkout', [WebsiteController::class, 'Checkout'])->name('checkout');
Route::get('categorywise-product/{name}/{id}', [WebsiteController::class, 'CategoryWiseProduct'])->name('categorywise-product');
Route::get('product-details/{name}/{id}', [WebsiteController::class, 'ProductDetails'])->name('product-details');
Route::get('district_get', [WebsiteController::class, 'DistrictGet'])->name('district_get');
Route::get('upazila_get', [WebsiteController::class, 'UpazilaGet'])->name('upazila_get');
Route::patch('update_shipping_charge', [WebsiteController::class, 'UpdateShippingCharge'])->name('update.shipping.charge');
Route::post('web_order_product_add', [OrderController::class, 'WebOrderProductAdd'])->name('web.order.product.add');
Route::get('order-complete', [OrderController::class, 'OrderComplete'])->name('order.complete');
Route::post('search-process', [WebsiteController::class, 'SearchProcess'])->name('search-process');


Route::middleware('auth')->group(function () {

    // User Permission Area
    Route::get('user-permission', [UserPermissionController::class, 'UserList'])->name('user-permission');
    Route::get('user-restriction/{id}', [UserPermissionController::class, 'UserRestriction'])->name('user-restriction');
    Route::post('user_restiction/update', [UserPermissionController::class, 'UserRectictionsUpdate'])->name('user_restictions.update');
    // Datatable Simple
    // Route::get('datatable', [UserPermissionController::class, 'Datatable'])->name('datatable');
    Route::get('view', [BasicController::class, 'View'])->name('view');
    Route::post('user_insert', [BasicController::class, 'UserInsert'])->name('user.insert');
    Route::get('datatable_data', [BasicController::class, 'DatatableData'])->name('datatable.data');
    Route::get('user_edit', [BasicController::class, 'UserEdit'])->name('user.edit');

    // Slider
    Route::get('slider', [WebsiteController::class,'Slider'])->name('slider');
    Route::post('slider_insert', [WebsiteController::class,'SliderInsert'])->name('slider.insert');
    Route::get('slider_data', [WebsiteController::class,'SliderData'])->name('slider.data');
    Route::get('slider_edit', [WebsiteController::class,'SliderEditData'])->name('slider.edit');

    // Category
    Route::get('category', [CategoryController::class, 'category'])->name('category');
    Route::get('category_data', [CategoryController::class, 'CategoryData'])->name('category.data');
    Route::get('category_edit_data', [CategoryController::class, 'CategoryEditData'])->name('category.edit');
    Route::post('category_insert', [CategoryController::class, 'CategoryInsert'])->name('category.insert');
    // Brand
    Route::get('brand', [BrandController::class, 'Brand'])->name('brand');
    Route::get('brand_data', [BrandController::class, 'BrandData'])->name('brand.data');
    Route::get('brand_edit_data', [BrandController::class, 'BrandEditData'])->name('brand.edit');
    Route::post('accounts_brand_insert', [BrandController::class, 'BrandInsert'])->name('brand.insert');
    // Unit
    Route::get('unit', [AccountItemUnitController::class, 'unit'])->name('unit');
    Route::get('unit_data', [AccountItemUnitController::class, 'UnitData'])->name('unit.data');
    Route::get('unit_edit_data', [AccountItemUnitController::class, 'UnitEditData'])->name('unit.edit');
    Route::post('unit_insert', [AccountItemUnitController::class, 'UnitInsert'])->name('unit.insert');
    // Size
    Route::get('size', [AccountItemUnitController::class, 'Size'])->name('size');
    Route::get('size_data', [AccountItemUnitController::class, 'SizeData'])->name('size.data');
    Route::get('size_edit_data', [AccountItemUnitController::class, 'SizeEditData'])->name('size.edit');
    Route::post('size_insert', [AccountItemUnitController::class, 'SizeInsert'])->name('size.insert');
    // Product
    Route::get('product', [ProductController::class, 'product'])->name('product');
    Route::get('product_add', [ProductController::class, 'AddProduct'])->name('product.add');
    Route::post('product_insert', [ProductController::class, 'ProductInsert'])->name('product.insert');
    Route::get('product_data', [ProductController::class, 'ProductData'])->name('product.data');
    Route::get('product_edit/{id?}', [ProductController::class, 'ProductEditData'])->name('product.edit');
    Route::get('product_images/{id?}', [ProductController::class, 'ProductImages'])->name('product.images');
    Route::get('product_images_data', [ProductController::class, 'ProductImagesData'])->name('product.images.data');
    Route::post('product_images_delete', [ProductController::class, 'ProductImagesDelete'])->name('product.images.delete');
    Route::post('product_images_update', [ProductController::class, 'ProductImagesUpdate'])->name('product.images.update');
    Route::get('product_images_edit', [ProductController::class, 'ProductImagesEdit'])->name('product.images.edit');
    // Order Module
    Route::get('order-list', [OrderController::class, 'OrderList'])->name('order-list');
    Route::get('delivered-order-list', [OrderController::class, 'DeliveredOrderList'])->name('delivered-order-list');
    Route::get('cancelled-order-list', [OrderController::class, 'CancelOrderList'])->name('cancelled-order-list');
    Route::post('order-delete', [OrderController::class, 'OrderDelete'])->name('order-delete');
    Route::get('order-list-data', [OrderController::class, 'OrderListData'])->name('order-list.Data');
    Route::get('order_invoice/{id?}', [OrderController::class, 'OrderInvoice'])->name('order.invoice');
    Route::post('processing_order_update', [OrderController::class, 'OrderStatusUpdate'])->name('processing_order.update');
    Route::get('order-details-list', [OrderController::class, 'OrderDetailsList'])->name('order-details-list');
    Route::get('order_details_list.Data', [OrderController::class, 'OrderDetailsListData'])->name('order-details-list.Data');

});

require __DIR__.'/auth.php';
