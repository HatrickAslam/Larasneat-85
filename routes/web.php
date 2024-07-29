<?php

use App\Http\Controllers\SneatController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [SneatController::class, 'dashboard']);
Route::get('dashboard', [SneatController::class, 'dashboard']);

Route::get('account', [SneatController::class, 'account']);
Route::get('notification', [SneatController::class, 'notification']);
Route::get('connection', [SneatController::class, 'connection']);

Route::get('login', [SneatController::class, 'login']);
Route::get('register', [SneatController::class, 'register']);
Route::get('forgot', [SneatController::class, 'forgot']);

Route::get('error', [SneatController::class, 'error']);
Route::get('maintenance', [SneatController::class, 'maintenance']);

Route::get('card', [SneatController::class, 'card']);

Route::get('accordion', [SneatController::class, 'accordion']);
Route::get('alert', [SneatController::class, 'alert']);
Route::get('badge', [SneatController::class, 'badge']);
Route::get('button', [SneatController::class, 'button']);
Route::get('carousel', [SneatController::class, 'carousel']);
Route::get('collapse', [SneatController::class, 'collapse']);
Route::get('dropdown', [SneatController::class, 'dropdown']);
Route::get('footer', [SneatController::class, 'footer']);
Route::get('listgroup', [SneatController::class, 'listgroup']);
Route::get('modal', [SneatController::class, 'modal']);
Route::get('navbar', [SneatController::class, 'navbar']);
Route::get('offcanvas', [SneatController::class, 'offcanvas']);
Route::get('pagination-breadcrumb', [SneatController::class, 'pagination_breadcrumb']);
Route::get('progress', [SneatController::class, 'progress']);
Route::get('spinner', [SneatController::class, 'spinner']);
Route::get('tab-pill', [SneatController::class, 'tab_pill']);
Route::get('toast', [SneatController::class, 'toast']);
Route::get('tooltip-popover', [SneatController::class, 'tooltip_popover']);
Route::get('typhography', [SneatController::class, 'typhography']);

Route::get('perfect-scrollbar', [SneatController::class, 'perfect_scrollbar']);
Route::get('text-divider', [SneatController::class, 'text_divider']);

Route::get('boxicon', [SneatController::class, 'boxicon']);

Route::get('basic-input', [SneatController::class, 'basic_input']);
Route::get('inputgroup', [SneatController::class, 'inputgroup']);

Route::get('vertical-form', [SneatController::class, 'vertical_form']);
Route::get('horizontal-form', [SneatController::class, 'horizontal_form']);

Route::get('table', [SneatController::class, 'table']);
