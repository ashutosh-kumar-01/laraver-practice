<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    // Show all products
    public function index()
    {
        return view('products.index');
    }

    // Show create form
    public function create()
    {
        return "Create Product Form";
    }

    // Store new product
    public function store(Request $request)
    {
        return "Product Stored";
    }

    // Show single product
    public function show(string $id)
    {
        return "Showing Product ID: " . $id;
    }

    // Show edit form
    public function edit(string $id)
    {
        return "Edit Form for Product ID: " . $id;
    }

    // Update product
    public function update(Request $request, string $id)
    {
        return "Updated Product ID: " . $id;
    }

    // Delete product
    public function destroy(string $id)
    {
        return "Deleted Product ID: " . $id;
    }
}