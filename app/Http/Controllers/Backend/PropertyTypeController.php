<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePropertyTypeRequest;
use App\Http\Requests\UpdatePropertyTypeRequest;
use App\Models\PropertyType;

class PropertyTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $propertyType = PropertyType::all();
        return view('admin.backend.type.all_type')->with('propertyType', $propertyType);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.backend.type.add_type');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePropertyTypeRequest $request)
    {
        PropertyType::create($request->validated());

        $notification = array(
            'message' => 'Property Type Created Successfuly!',
            'alert-type' => 'success'
        );
        return redirect()->route('propertyTypes.index')->with($notification);
    }

    /**
     * Display the specified resource.
     */
    public function show(PropertyType $propertyType)
    {
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PropertyType $propertyType)
    {
        return view('admin.backend.type.edit_type')->with('propertyType', $propertyType);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePropertyTypeRequest $request, PropertyType $propertyType)
    {
        $data = $request->validated();
        $propertyType->update($data);
        $notification = array(
            'message' => 'Property Type Updated Successfuly!',
            'alert-type' => 'success'
        );
        return redirect()->route('propertyTypes.index')->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PropertyType $propertyType)
    {
        $propertyType->delete();
        $notification = array(
            'message' => 'Property Type deleted Successfuly!',
            'alert-type' => 'success'
        );
        return redirect()->route('propertyTypes.index')->with($notification);
    }
}
