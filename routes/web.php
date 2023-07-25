<?php



use App\Http\Controllers\Exportpdf;
use App\Http\Livewire\Crud\EditUser;
use App\Http\Livewire\Crud\IndexUser;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PDFController;
use App\Http\Controllers\ChartController;
use App\Http\Livewire\CrudColis\AddColis;
use App\Http\Controllers\PDFControllerCra;
use App\Http\Livewire\Crud\IndexComponent;
use App\Http\Livewire\CrudColis\EditColis;
use App\Http\Controllers\ChartJSController;
use App\Http\Livewire\CrudColis\IndexColis;
use App\Http\Livewire\Crudbranche\AddBranche;
use App\Http\Livewire\Crudbranche\EditBranche;
use App\Http\Livewire\Crudbranche\IndexBranche;
use App\Http\Livewire\Crud\AddUtilisateurComponent;
use App\Http\Livewire\Crud\EditUtilisateurComponent;
use App\Http\Livewire\CrudCourrierarr\AddCourrierarr;
use App\Http\Livewire\CrudCourrierdep\AddCourrierdep;
use App\Http\Livewire\CrudCourrierarr\EditCourrierarr;
use App\Http\Livewire\CrudCourrierdep\EditCourrierdep;
use App\Http\Livewire\CrudCourrierarr\IndexCourrierarr;
use App\Http\Livewire\CrudCourrierdep\IndexCourrierdep;

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
});

Route::get('/charita', function () {
    return view('charita');
});

Route::view('/index', 'index');

// Route Utilisateur
Route::get('utilisateurs', IndexComponent::class)->name('utilisateurs');
Route::get('add-utilisateur', AddUtilisateurComponent::class)->name('addUtilisateur');
Route::get('edit-utilisateur/{id}', EditUtilisateurComponent::class)->name('editUtilisateur');

//Route Branche
Route::get('branches', IndexBranche::class)->name('branches');
Route::get('add-branche', AddBranche::class)->name('addBranche');
Route::get('edit-branche/{id}', EditBranche::class)->name('editBranche');


//Route Courrierarr
Route::get('courrierarrs', IndexCourrierarr::class)->name('courrierarrs');
Route::get('add-courrierarr', AddCourrierarr::class)->name('addCourrierarr');
Route::get('edit-courrierarr/{id}', EditCourrierarr::class)->name('editCourrierarr');

//Route Courrierdep
Route::get('courrierdeps', IndexCourrierdep::class)->name('courrierdeps');
Route::get('add-courrierdep', AddCourrierdep::class)->name('addCourrierdep');
Route::get('edit-courrierdep/{id}', EditCourrierdep::class)->name('editCourrierdep');

//Route Colis
Route::get('coliss', IndexColis::class)->name('coliss');
Route::get('add-colis', AddColis::class)->name('addColis');
Route::get('edit-colis/{id}', EditColis::class)->name('editColis');


Route::view('login','livewire.home')->name('login');

Route::get('generate-pdf', [PDFController::class, 'generatePDF'])->name('pdf');

Route::get('chart', [ChartJSController::class, 'index']);

// Route User
Route::get('users', IndexUser::class)->name('users');
Route::get('edit-user/{id}', EditUser::class)->name('editUser');

Route::get('/show-chart', [ChartController::class, 'loadChartData']);


