<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCustomerDetailsRequest;
use App\Http\Requests\UpdateCustomerDetailsRequest;
use App\Models\CustomerDetails;

class CustomerDetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCustomerDetailsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(CustomerDetails $customerDetails)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CustomerDetails $customerDetails)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCustomerDetailsRequest $request, CustomerDetails $customerDetails)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CustomerDetails $customerDetails)
    {
        //
    }
}
