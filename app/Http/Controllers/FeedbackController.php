<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{

    public function summary()
    {

        $all = auth()->user()->apiKey->feedBacks
            ->count();

        $other = auth()->user()->apiKey->feedBacks
            ->where('type', 'other')
            ->count();

        $issue = auth()->user()->apiKey->feedBacks
            ->where('type', 'issue')
            ->count();

        $idea = auth()->user()->apiKey->feedBacks
            ->where('type', 'idea')
            ->count();

        return response([
            'all' => $all,
            'other' => $other,
            'issue' => $issue,
            'idea' => $idea,
        ], 200);
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->type) {
            $total = auth()->user()->apikey->feedBacks()
                ->where('type', $request->type)->count();

            $feedbacks = auth()->user()->apiKey->feedBacks()
                ->where('type', $request->type)->offset($request->offset)
                ->limit($request->limit)->get();

            return response(['data' => $feedbacks, 'pagination' => [
                'offset' => $request->offset,
                'limit' => $request->limit,
                'total' => $total,
            ]]);
        }

        $total = auth()->user()->apikey->feedBacks->count();

        $feedbacks = auth()->user()->apiKey->feedBacks()
            ->offset($request->offset)
            ->limit($request->limit)->get();

        return response(['data' => $feedbacks, 'pagination' => [
            'offset' => $request->offset,
            'limit' => $request->limit,
            'total' => $total,
        ]]);
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
    public function store(Request $request)
    {
        $feedback = Feedback::create([
            'type' => $request->type,
            'text' => $request->text,
            'fingerprint' => $request->fingerprint,
            'api_key_id' => $request->apiKey,
            'device' => $request->device,
            'page' => $request->page,
        ]);

        return $feedback;
    }

    /**
     * Display the specified resource.
     */
    public function show(Feedback $feedback)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Feedback $feedback)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($apikey, $oldApiKey)
    {
        $oldApiKey->feedBacks()->update([
            'api_key_id' => $apikey->id,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Feedback $feedback)
    {
        //
    }
}
