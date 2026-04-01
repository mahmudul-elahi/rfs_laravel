<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Accessibility;

class AccessibilityController extends Controller
{
    public function index()
    {
        $accessibilities = Accessibility::orderBy('position')->get()->keyBy('position');

        return view('frontend.accessibility.index', compact('accessibilities'));
    }
}
