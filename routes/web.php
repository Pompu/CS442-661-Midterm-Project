<?php

use App\Http\Controllers\BudgetController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\BoardController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    if (auth()->check()) {
        if (auth()->user()->role === 'OFFICER') {
            return redirect('/budgets');
        }
        return redirect('/events');
    } else {
        return redirect('/events');
    }
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/historys/register', [HistoryController::class, 'register'])->name("historys.register");
Route::get('/historys/certificate', [HistoryController::class, 'certificate'])->name("historys.certificate");

Route::get('/events', [EventController::class, 'index'])->name("event");
Route::get('/events/my-event', [EventController::class, 'myEvent'])->name("events.my-event");;
Route::get('/events/create-event', [EventController::class, 'createEvent'])->name("events.create-event");;
Route::get('/myevents/applicants', function () {
    return view('myevents.applicants');
})->name('myevents.applicants');

Route::get('/myevents/details', function () {
    return view('myevents.details');
})->name('myevents.details');

Route::get('/events', [EventController::class, 'index'])->name("event");;

Route::get('/events/{event}', [EventController::class, 'show'])->name('events.show');

Route::get('/apply/verify', function () {
    return view('form.verify');
});

Route::get('/boards', [BoardController::class, 'index'])->name("board");

Route::get('/teams', [TeamController::class, 'index'])->name("team");

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/apply', [ProfileController::class, 'apply'])->name('profile.apply');
    Route::get('/budgets/{status?}', [BudgetController::class, 'index'])->name('budgets.index');
    });
;

require __DIR__.'/auth.php';
