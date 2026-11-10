<?php

namespace App\Http\Controllers;

use App\Models\Lead;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class LeadController extends Controller
{
    /**
     * Store a callback request coming from the site forms.
     *
     * The theme used to post to the WordPress admin-ajax endpoint with the
     * `universal_send` action, so the same payload shape is accepted here.
     */
    public function store(Request $request): JsonResponse|RedirectResponse
    {
        $validated = $request->validate([
            'tel' => ['required', 'string', 'max:32'],
            'msg' => ['nullable', 'string', 'max:1000'],
        ]);

        Lead::create([
            'tel' => $validated['tel'],
            'msg' => $validated['msg'] ?? null,
            'source' => $request->input('action'),
        ]);

        if ($request->expectsJson()) {
            return response()->json(['status' => 'ok']);
        }

        return back()->with('status', 'ok');
    }
}
