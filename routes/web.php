<?php

use App\Http\Controllers\ListingController;
use App\Http\Controllers\UserController;
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

// Common Resource Routes:
// index - Show all listings
// show - Show single listing
// create - Show form to create new listing
// store - Store new listing
// edit - Show form to edit listing
// update - Update listing
// destroy - Delete listing

// TODO - Setup authenication to hide pages

// Listings

// Get All Listings
Route::get('/', [ListingController::class, 'index']);

// Manage Listings
Route::get('/listings/manage', [ListingController::class, 'manage']);

// Get Create New Listing Form
Route::get('/listings/create', [ListingController::class, 'create']);

// // Create and Store New Listing
Route::post('/listings', [ListingController::class, 'store']);

// Get Edit Listing Form
Route::get('/listings/{listing}/edit', [ListingController::class, 'edit']);

// Update Edited Listing
Route::put('/listings/{listing}', [ListingController::class, 'update']);

// Delete Listing
Route::delete('/listings/{listing}', [ListingController::class, 'destroy']);

// Show Single Listing
Route::get('listings/{listing}', [ListingController::class, 'show']);

// Users

// Show Register Form
Route::get('/register', [UserController::class, 'create']);

// Edit User
Route::get('/users/profile', [UserController::class, 'edit']);

// Create and Store New User
Route::post('/users', [UserController::class, 'store']);

// Show Login Form
Route::get('/login', [UserController::class, 'login']);

// Login User
Route::post('/users/authenticate', [UserController::class, 'authenticateUser']);

// // Logout User
Route::post('/logout', [UserController::class, 'logout']);
