<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Email;
use App\Http\Requests\StoreEmailRequest;
use App\Http\Requests\UpdateEmailRequest;

class EmailController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $emails = Email::orderBy('is_fav', 'desc')->latest()
            ->paginate(10);
        return view('backend.emails.index', compact('emails'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreEmailRequest $request)
    {
        $data = $request->validated();

        Email::create($data);

        return back()->with('success', 'Message sent successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Email $email)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function mark_as_read(Email $email)
    {
        $email->update([
            'is_read' => true,
            'read_at' => now()
        ]);

        return back();
    }

    /**
     * Update the specified resource in storage.
     */
    public function fav(Email $email)
    {
        $email->update([
            'is_fav' => !$email->is_fav
        ]);

        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Email $email)
    {
        $email->delete();

        return back()->with('success', 'Email moved to trash.');
    }
}
