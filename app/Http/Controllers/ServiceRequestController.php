<?php

namespace App\Http\Controllers;

use App\Models\ServiceRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class ServiceRequestController extends Controller
{
    /**
     * Store a newly submitted service request.
     */
    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'first_name' => ['required', 'string', 'max:100'],
            'last_name' => ['required', 'string', 'max:100'],
            'phone' => ['required', 'string', 'max:30'],
            'email' => ['required', 'email', 'max:255'],
            'issue_description' => ['required', 'string', 'max:4000'],
        ]);

        ServiceRequest::create($validated);

        return redirect()
            ->route('home')
            ->with('status', 'Thanks! We received your request and will contact you shortly.');
    }
}