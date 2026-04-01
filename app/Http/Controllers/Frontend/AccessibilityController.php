<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Accessibility;

class AccessibilityController extends Controller
{
    public function index()
    {
        $accessibilities = Accessibility::latest()->take(3)->get()->values();

        return view('frontend.accessibility.index', compact('accessibilities'));
    }

    public function show(Accessibility $accessibility)
    {
        return view('frontend.accessibility.show', compact('accessibility'));
    }
}
