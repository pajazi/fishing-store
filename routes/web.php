<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use Request;
use App\Models\User;

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
    return Inertia::render('Home');
});

Route::get('/users', function () {
    // sleep(2);
    return Inertia::render('Users', [
        'users' => User::query()
        ->when(Request::input('search'), function ($query, $search) {
            $query->where('email', 'like', "%{$search}%");
        })
        ->paginate(10)
        ->withQueryString()
        ->through(fn ($user) => [
            'id' => $user->id,
            'email' => $user->email
        ]),
        'filters' => Request::only(['search'])
    ]);
});

Route::get('/settings', function () {
    return Inertia::render('Settings');
});

Route::post('/logout', function (Request $request) {
    dd($request['username']);
});
