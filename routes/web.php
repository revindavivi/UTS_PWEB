<?php

use Illuminate\Support\Facades\Route;
use faker\Factory as Faker;

Route::get('/', function () {
    return view('landing'); // Make sure your landing page template is named 'landing.blade.php'
})->name('landing');

// Route::get('/', function () {
//     dd('Landing route hit!'); // This will dump a message if the route is accessed
//     return view('landing');
// })->name('landing');

Route::get('/register', function () {
    return view('register'); // Make sure the view file is named 'register.blade.php'
})->name('register');

// Process the registration form
Route::post('/register', function (Request $request) {
    // Validate the request data
    $request->validate([
        'username' => 'required|string|max:255',
        'email' => 'required|string|email|max:255|unique:users', // Ensure the email is unique in the users table
        'password' => 'required|string|min:8|confirmed', // Confirm password is also checked
    ]);

    // Create the user (you can modify this part based on your User model)
    \App\Models\User::create([
        'username' => $request->input('username'),
        'email' => $request->input('email'),
        'password' => bcrypt($request->input('password')), // Hash the password
    ]);

    // Redirect to login with a success message
    return redirect()->route('login')->with('success', 'Registration successful! Please log in.');})->name('processRegister');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::post('/login', function (Illuminate\Http\Request $request) {
    // Bypass authentication, accept any username/password.
    $username = $request->input('username');
    session(['username' => $username]);

    // Redirect to a homepage or dashboard with a success message.
    return redirect()->route('homepage')->with('success', 'Welcome, ' . $username . '!');
})->name('processLogin');



Route::get('/homepage', function () {
    // Ambil data username dari session
    $username = session('username');

    // Generate data contacts menggunakan Faker dengan locale 'id_ID' untuk Bahasa Indonesia
    $contacts = [];
    $faker = Faker::create('id_ID'); // Set locale to Indonesian
    for ($i = 1; $i <= 10; $i++) {
        $contacts[] = [
            'name' => $faker->name, // Nama dalam Bahasa Indonesia
            'email' => $faker->unique()->safeEmail,
            'phone' => $faker->phoneNumber,
        ];
    }

    return view('homepage', ['contacts' => $contacts, 'username' => $username]);
})->name('homepage');