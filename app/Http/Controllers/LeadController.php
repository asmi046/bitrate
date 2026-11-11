<?php

namespace App\Http\Controllers;

use App\Actions\StoreLeadAction;
use App\Http\Requests\StoreLeadRequest;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;

class LeadController extends Controller
{
    /**
     * Store a lead submitted through one of the site forms.
     *
     * The forms are submitted with ajax, so the request is answered with a
     * json payload that the frontend renders in a popup window. A plain form
     * submission without javascript is redirected back to the page instead.
     */
    public function store(StoreLeadRequest $request, StoreLeadAction $storeLead): JsonResponse|RedirectResponse
    {
        $lead = $storeLead->handle($request);

        if ($request->expectsJson()) {
            return response()->json([
                'status' => 'ok',
                'message' => config('leads.messages.success'),
                'data' => [
                    'id' => $lead->id,
                ],
            ]);
        }

        return back()
            ->with('status', 'ok')
            ->with('message', config('leads.messages.success'));
    }
}
