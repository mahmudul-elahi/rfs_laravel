<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use App\Http\Requests\UpdateSettingRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $settings = Setting::pluck('value', 'key')->toArray();

        return view('backend.settings.index', compact('settings'));
    }


    public function update(UpdateSettingRequest $request)
    {
        DB::transaction(function () use ($request) {

            $inputs = $request->except(['_token', '_method']);

            foreach ($inputs as $key => $value) {

                $setting = Setting::where('key', $key)->first();

                if ($request->hasFile($key)) {

                    if ($setting && $setting->value && Storage::disk('public')->exists($setting->value)) {
                        Storage::disk('public')->delete($setting->value);
                    }

                    $path = $request->file($key)->store('settings', 'public');

                    Setting::updateOrCreate(
                        ['key' => $key],
                        ['value' => 'storage/' . $path]
                    );

                    continue;
                }

                if ($key === 'maintenance_mode') {
                    $value = $request->maintenance_mode ? 'true' : 'false';
                }

                Setting::updateOrCreate(
                    ['key' => $key],
                    ['value' => $value]
                );
            }

            if (!$request->has('maintenance_mode')) {
                Setting::updateOrCreate(
                    ['key' => 'maintenance_mode'],
                    ['value' => 'false']
                );
            }
        });

        return back()->with('success', 'Settings updated successfully.');
    }
}
