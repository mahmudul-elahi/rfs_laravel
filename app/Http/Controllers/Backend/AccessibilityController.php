<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreAccessibilityRequest;
use App\Http\Requests\UpdateAccessibilityRequest;
use App\Models\Accessibility;

class AccessibilityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $accessibilities = Accessibility::orderBy('position')->paginate(10);

        return view('backend.accessibilities.index', compact('accessibilities'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.accessibilities.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAccessibilityRequest $request)
    {
        $data = $request->validated();

        Accessibility::create($data);

        return redirect()
            ->route('accessibilities.index')
            ->with('success', 'Accessibility item created successfully.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Accessibility $accessibility)
    {
        return view('backend.accessibilities.edit', compact('accessibility'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAccessibilityRequest $request, Accessibility $accessibility)
    {
        $data = $request->validated();

        $accessibility->update($data);

        return redirect()
            ->route('accessibilities.index')
            ->with('success', 'Accessibility item updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Accessibility $accessibility)
    {
        $accessibility->delete();

        return back()->with('success', 'Accessibility item deleted successfully.');
    }
}
