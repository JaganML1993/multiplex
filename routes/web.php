<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\admin\AuthController;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\OpeningController;
use App\Http\Controllers\admin\ProductController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\ProductCategoryController;
use App\Models\admin\Category;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [IndexController::class, 'index']);
Route::post('/save_enquiry', [IndexController::class, 'save_enquiry'])->name('home.save_enquiry');
Route::get('/current-openings', [IndexController::class, 'current_openings'])->name('home.current-openings');
Route::get('/search-openings', [IndexController::class, 'searchOpenings']);
Route::get('/life-at-multiplex', [IndexController::class, 'life_at_multiplex'])->name('home.life-at-multiplex');
Route::get('/job_application/{id}', [IndexController::class, 'job_application'])->name('home.job_application');
Route::post('/save_job', [IndexController::class, 'save_job'])->name('home.save_job');

/** about us */
Route::get('/vision-and-misssion', [IndexController::class, 'vision_and_misssion'])->name('vision-and-misssion');
Route::get('/founder-and-management', [IndexController::class, 'founder_and_management'])->name('founder-and-management');
Route::get('/group-of-companies', [IndexController::class, 'group_of_companies'])->name('group-of-companies');
Route::get('/awards-and-recognitions', [IndexController::class, 'awards_and_recognitions'])->name('awards-and-recognitions');
Route::get('/team', [IndexController::class, 'team'])->name('team');
Route::get('/timeline', [IndexController::class, 'timeline'])->name('timeline');

/** corporate */
Route::get('/branches', [IndexController::class, 'branches'])->name('branches');
Route::get('/global-connect', [IndexController::class, 'global_connect'])->name('global-connect');
Route::get('/research-and-development', [IndexController::class, 'research_and_development'])->name('research-and-development');
Route::get('/infrastructure', [IndexController::class, 'infrastructure'])->name('infrastructure');

/** products */
Route::get('/products', [IndexController::class, 'products'])->name('products.index');
// Route::get('/fertilizers', [IndexController::class, 'fertilizers'])->name('fertilizers');
Route::get('/multi-pk', [IndexController::class, 'multi_pk'])->name('multi-pk');

$categories = Category::where('slug', '!=', '')->where('status', '1')->get();
foreach($categories as $cat) {
    Route::get($cat->slug, [ProductCategoryController::class, 'categoryProducts'])->name($cat->slug);
    Route::get($cat->slug.'/{id}', [ProductCategoryController::class, 'categoryProductDetail'])->name('category.product.detail'.$cat->slug);
}

Route::get('product/{id}', [ProductCategoryController::class, 'categoryProductDetail']);

/** services */
Route::get('/quality-testing', [IndexController::class, 'quality_testing'])->name('quality-testing');
Route::get('/soil-analysis-laboratory', [IndexController::class, 'soil_analysis_laboratory'])->name('soil-analysis-laboratory');
Route::get('/water-analysis-laboratory', [IndexController::class, 'water_analysis_laboratory'])->name('water-analysis-laboratory');
Route::get('/leaf-analysis-laboratory', [IndexController::class, 'leaf_analysis_laboratory'])->name('leaf-analysis-laboratory');
Route::get('/microbial-analysis-laboratory', [IndexController::class, 'microbial_analysis_laboratory'])->name('microbial-analysis-laboratory');
Route::get('/drone-services', [IndexController::class, 'drone_services'])->name('drone-services');
Route::get('/gardening-services', [IndexController::class, 'gardening_services'])->name('gardening-services');

/** community */
Route::get('/farmers-club', [IndexController::class, 'farmer_club'])->name('farmers-club');
Route::get('/dealers-meet', [IndexController::class, 'dealers_meet'])->name('dealers-meet');
Route::get('/farmers-meet', [IndexController::class, 'farmers_meet'])->name('farmers-meet');
Route::get('/multiplex-vaahini', [IndexController::class, 'multiplex_vaahini'])->name('multiplex-vaahini');


/** Group of companies */
Route::get('/karnataka-agro-chemicals', [IndexController::class, 'karnataka_agro_chemicals'])->name('karnataka-agro-chemicals');
Route::get('/multiplex-biotech-pvt-ltd', [IndexController::class, 'multiplex_biotech_pvt_ltd'])->name('multiplex-biotech-pvt-ltd');
Route::get('/multiplex-fertilizers-pvt-ltd', [IndexController::class, 'multiplex_fertilizers_pvt_ltd'])->name('multiplex-fertilizers-pvt-ltd');
Route::get('/multiplex-forest-factree', [IndexController::class, 'multiplex_forest_factree'])->name('multiplex-forest-factree');
Route::get('/multiplex-farming', [IndexController::class, 'multiplex_farming'])->name('multiplex-farming');
Route::get('/multiplex-agricare-pvt-ltd', [IndexController::class, 'multiplex_agricare_pvt_ltd'])->name('multiplex-agricare-pvt-ltd');
Route::get('/multiplex-movers', [IndexController::class, 'multiplex_movers'])->name('multiplex-movers');
Route::get('/multiplex-safe-and-farm-fresh', [IndexController::class, 'multiplex_safe_and_farm_fresh'])->name('multiplex-safe-and-farm-fresh');

/** Blogs */
Route::get('/blogs', [IndexController::class, 'blogs'])->name('blogs');
Route::get('/micronutrients-in-crop-production', [IndexController::class, 'micronutrients_in_crop_production'])->name('micronutrients-in-crop-production');
Route::get('/minchu-plus-for-pink-boll-worm', [IndexController::class, 'minchu_plus_for_pink_boll_worm'])->name('minchu-plus-for-pink-boll-worm');
Route::get('/what-is-soil-testing', [IndexController::class, 'what_is_soil_testing'])->name('what-is-soil-testing');
Route::get('/the-red-spider-mite', [IndexController::class, 'the_red_spider_mite'])->name('the-red-spider-mite');


/** footer */
Route::get('/gallery', [IndexController::class, 'gallery'])->name('gallery');
Route::get('/success-stories', [IndexController::class, 'success_stories'])->name('success-stories');
Route::get('/terms-and-conditions', [IndexController::class, 'terms_and_conditions'])->name('terms-and-conditions');


// Route::get('/autocomplete-search', [IndexController::class, 'autocompleteSearch']);
Route::get('/autocomplete-location', [IndexController::class, 'autocompleteSearch']);
Route::get('/autocomplete-department', [IndexController::class, 'autocompleteDepartment']);
Route::get('/autocomplete-position', [IndexController::class, 'autocompletePosition']);
Route::get('/search-products', [IndexController::class, 'showProducts'])->name('search.products');
Route::get('/autocomplete-global', [IndexController::class, 'showGlobal'])->name('search.global');

/** contact us */
Route::get('/contact', [IndexController::class, 'contact'])->name('contact');

/** admin routes */
Route::prefix('admin')->group(function () {
    Route::get('/', [AuthController::class, 'dashboard'])->name('dashboard');
    Route::get('login', [AuthController::class, 'index'])->name('login');
    Route::post('post-login', [AuthController::class, 'postLogin'])->name('login.post');
    Route::get('registration', [AuthController::class, 'registration'])->name('register');
    Route::post('post-registration', [AuthController::class, 'postRegistration'])->name('register.post');
    Route::get('dashboard', [AuthController::class, 'dashboard']);
    Route::get('logout', [AuthController::class, 'logout'])->name('logout');

    Route::get('category', [DashboardController::class, 'category'])->name('admin.category');
    Route::get('create_category', [DashboardController::class, 'create_category'])->name('admin.create.category');
    Route::post('save_category', [DashboardController::class, 'save_category'])->name('admin.save.category');
    Route::get('edit_category/{id}', [DashboardController::class, 'edit_category'])->name('admin.edit.category');
    Route::get('delete_category/{id}', [DashboardController::class, 'delete_category'])->name('admin.delete.category');
    Route::post('update_category', [DashboardController::class, 'update_category'])->name('admin.update.category');

    Route::get('sub_category', [DashboardController::class, 'sub_category'])->name('admin.sub_category');
    Route::get('create_sub_category', [DashboardController::class, 'create_sub_category'])->name('admin.create.sub_category');
    Route::post('save_sub_category', [DashboardController::class, 'save_sub_category'])->name('admin.save.sub_category');
    Route::get('edit_sub_category/{id}', [DashboardController::class, 'edit_sub_category'])->name('admin.edit.sub_category');
    Route::get('delete_sub_category/{id}', [DashboardController::class, 'delete_sub_category'])->name('admin.delete.sub_category');
    Route::post('update_sub_category', [DashboardController::class, 'update_sub_category'])->name('admin.update.sub_category');

    Route::get('products', [ProductController::class, 'index'])->name('products');
    Route::get('product-create', [ProductController::class, 'create'])->name('product.create');
    Route::post('product-store', [ProductController::class, 'store'])->name('product.store');
    Route::post('ajax-subcat', [ProductController::class, 'ajaxSubcategory'])->name('ajax.subcat');
    Route::get('product-edit/{id}', [ProductController::class, 'edit'])->name('product.edit');
    Route::post('product-update', [ProductController::class, 'update'])->name('product.update');
    Route::get('product-delete/{id}', [ProductController::class, 'destroy'])->name('product.delete');

    Route::get('enquiry-list', [DashboardController::class, 'enquiryList'])->name('enquiry.list');
    Route::get('product-enquiry-list', [DashboardController::class, 'productenquiryList'])->name('product-enquiry.list');
    Route::get('service-enquiry-list', [DashboardController::class, 'serviceenquiryList'])->name('service-enquiry.list');

    Route::get('/enquiry/update-remark/{id}', [DashboardController::class, 'updateRemark'])->name('update.remark');
    Route::post('/enquiry/updateremark/{id}', [DashboardController::class, 'updateRemarkStore'])->name('update.remark-update');

    Route::get('openings', [OpeningController::class, 'index'])->name('openings');
    Route::get('opening-create', [OpeningController::class, 'create'])->name('opening.create');
    Route::post('opening-store', [OpeningController::class, 'store'])->name('opening.store');
    Route::get('opening-edit/{id}', [OpeningController::class, 'edit'])->name('opening.edit');
    Route::post('opening-update', [OpeningController::class, 'update'])->name('opening.update');
    Route::get('opening-delete/{id}', [OpeningController::class, 'destroy'])->name('opening.delete');

    Route::get('job', [OpeningController::class, 'job'])->name('job');

    Route::resource('departments', DepartmentController::class);
    Route::resource('galleries', GalleryController::class);

});
