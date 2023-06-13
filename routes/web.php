<?php

use App\Http\Livewire\Admin\AddCategoryComponent;
use App\Http\Livewire\Admin\AddProductComponent;
use App\Http\Livewire\Admin\AdminDashboardComponent;
use App\Http\Livewire\Admin\CustomerDetailsComponent;
use App\Http\Livewire\Admin\ListOfCustomersComponent;
use App\Http\Livewire\Admin\ListOfOrdersComponent;
use App\Http\Livewire\Admin\ListOfProductsComponent;
use App\Http\Livewire\Admin\OrderDetailsComponent;
use App\Http\Livewire\Admin\ProcessOrderComponent;
use App\Http\Livewire\Admin\UpdateCategoryComponent;
use App\Http\Livewire\Admin\UpdateProductComponent;
use App\Http\Livewire\CartComponent;
use App\Http\Livewire\CheckoutComponent;
use App\Http\Livewire\Customer\CustomerDashboardComponent;
use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\MyOrdersComponent;
use App\Http\Livewire\MyProfileComponent;
use App\Http\Livewire\ProductDetailsComponent;
use App\Http\Livewire\ProductFilterComponent;
use App\Http\Livewire\ViewCategoryComponent;
use App\Http\Livewire\ViewMyOrderDetailsComponent;
use App\Http\Livewire\WishlistComponent;
use Illuminate\Support\Facades\Route;


Route::get('/', HomeComponent::class)->name('home');
Route::get('/category/{slug}', ViewCategoryComponent::class)->name('category.dashboard');
//Create a route for product details with the category slug and product slug
//Route::get('/category/{category_slug}/{product_slug}', [ProductDetailsComponent::class, 'render'])->name('product.details');
Route::get('/category/{category_slug}/{product_slug}', ProductDetailsComponent::class)->name('product.details');


//For Customer
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/cart', CartComponent::class)->name('product.cart');
    Route::get('/customer/dashboard', CustomerDashboardComponent::class)->name('customer.dashboard');
    Route::post('/add-to-cart', [ProductDetailsComponent::class, 'store'])->name('add-to-cart');
    Route::get('/checkout', CheckoutComponent::class)->name('checkout');
    Route::post('/placing-order', [CheckoutComponent::class, 'placeOrder'])->name('place-order');
    Route::get('/my-orders', MyOrdersComponent::class)->name('my-orders');
    //Create route for view my order details
    Route::get('/my-orders/{order_id}', ViewMyOrderDetailsComponent::class)->name('my-order-details');
    Route::get('/my-profile', MyProfileComponent::class)->name('my-profile');
    Route::post('/update-profile', [MyProfileComponent::class, 'updateProfile'])->name('update-profile');
    Route::get('/wishlist', WishlistComponent::class)->name('wishlist');
    //Route for to add product to wishlist
    Route::post('/add-to-wishlist', [ProductDetailsComponent::class, 'addToWishlist'])->name('add-to-wishlist');
    Route::post('/wishlist/add-to-cart/{id}', [WishlistComponent::class, 'addToCart'])->name('wishlist.add-to-cart');
    Route::post('/my-profile/wishlist/add-to-cart/{id}', [MyProfileComponent::class, 'addToCartFromProfile'])->name('wishlist.add-to-cart-from-profile');

    //Route for productfiltercomponent
    Route::get('/products/product-filter', ProductFilterComponent::class)->name('product-filter');





});


//For Admin
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified', 'authadmin'
])->group(callback: function () {
    Route::get('admin/dashboard', AdminDashboardComponent::class)->name('admin.dashboard');

//    Start of Category Routes
    Route::get('/admin/dashboard/add-category', AddCategoryComponent::class)->name('add-category.dashboard');
    Route::post('/admin/dashboard/processing-category', [AddCategoryComponent::class, 'insert'])->name('post-category.dashboard');
    Route::get('/admin/dashboard/edit-category/{category}', UpdateCategoryComponent::class)->name('edit-category.dashboard');
    Route::put('/admin/dashboard/update-category/{id}', [UpdateCategoryComponent::class, 'update'])->name('update-category.dashboard');
    Route::get('/admin/dashboard/delete-category/{category}', [UpdateCategoryComponent::class, 'destroy'])->name('delete-category.dashboard');
//    End of Category Routes

//    Start of Product Routes
    Route::get('/admin/dashboard/add-product', AddProductComponent::class)->name('add-product.dashboard');
    Route::post('/admin/dashboard/processing-product', [AddProductComponent::class, 'insert'])->name('post-product.dashboard');
    Route::get('/admin/dashboard/products', ListOfProductsComponent::class)->name('products.dashboard');
    Route::get('/admin/dashboard/edit-product/{product}', UpdateProductComponent::class)->name('edit-product.dashboard');
    Route::put('/admin/dashboard/update-product/{id}', [UpdateProductComponent::class, 'update'])->name('update-product.dashboard');
    Route::get('/admin/dashboard/delete-product/{product}', [UpdateProductComponent::class, 'destroy'])->name('delete-product.dashboard');

//    End of product routes

//    Start of customer routes
    Route::get('/admin/dashboard/customers', ListOfCustomersComponent::class)->name('customers.dashboard');
    Route::get('/admin/dashboard/customer-details', CustomerDetailsComponent::class)->name('customers-details.dashboard');

//    End of customer routes

//    Start of order routes
    Route::get('/admin/dashboard/orders', ListOfOrdersComponent::class)->name('orders.dashboard');
    Route::get('/admin/dashboard/order-details/{order_id}', OrderDetailsComponent::class)->name('order-details.dashboard');
    Route::get('/admin/dashboard/order-details/assign-courier/{order_id}', ProcessOrderComponent::class)->name('assign-courier.dashboard');
    //Create route for processing order of the current order id
    Route::post('/admin/dashboard/order-details/processing-order/{order_id}', [ProcessOrderComponent::class, 'processOrder'])->name('admin.processOrder');
    //Save notes route
    Route::post('/admin/dashboard/order-details/save-notes/{order_id}', [OrderDetailsComponent::class, 'saveNotes'])->name('admin.saveNotes');

//    End of order routes
});
