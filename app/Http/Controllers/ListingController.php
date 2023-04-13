<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;

class ListingController extends Controller
{
    // Get All Listings
    public function index()
    {
        return view('listings.index', [
            'listings' => Listing::all()
        ]);
    }

    // Show Single Listing
    public function show(Listing $listing)
    {
        return view('listings.show', [
            'listing' => $listing
        ]);
    }

    // Get Create New Listing Form
    public function create()
    {
    }

    // Create and Store New Listing
    public function store()
    {
    }

    // Get Edit Listing Form
    public function edit()
    {
    }

    // Update Edited Listing
    public function update()
    {
    }

    // Delete Listing
    public function delete()
    {
    }
}
