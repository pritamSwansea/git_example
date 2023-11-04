<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreorderDetailsRequest;
use App\Http\Requests\UpdateorderDetailsRequest;
use App\Models\orderDetails;

class OrderDetailsController extends Controller
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
    public function store(StoreorderDetailsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(orderDetails $orderDetails)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(orderDetails $orderDetails)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateorderDetailsRequest $request, orderDetails $orderDetails)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(orderDetails $orderDetails)
    {
        //
    }
}
