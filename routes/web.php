<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use Illuminate\Http\Request;
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

Route::get('/users', function (Request $request) {
    // sleep(2);
    return Inertia::render('Users/Index', [
        'users' => User::query()
            ->when($request->input('search'), function ($query, $search) {
                $query->where('email', 'like', "%{$search}%");
            })
            ->paginate(10)
            ->withQueryString()
            ->through(fn ($user) => [
                'id' => $user->id,
                'email' => $user->email
            ]),
        'filters' => request(['search'])
    ]);
});

Route::get('/settings', function () {
    return Inertia::render('Settings');
});

Route::get('/users/create', function () {
    return Inertia::render('Users/Create');
});

Route::post('/logout', function (Request $request) {
    dd($request['username']);
});

Route::post('/users', function (Request $request) {
    $attributes = $request->validate([
        'name' => 'required',
        'email' => 'required|email',
        'password' => 'required|'
    ]);

    User::create($attributes);

    //return with Inertia
    return redirect('/users');
});
