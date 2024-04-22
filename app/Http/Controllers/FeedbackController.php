<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{

    public function summary() {

        $all = auth()->user()->apiKey->feedBacks
        ->count();

        $other = auth()->user()->apiKey->feedBacks
        ->where('type', 'OTHER')
        ->count();

        $issue = auth()->user()->apiKey->feedBacks
        ->where('type', 'ISSUE')
        ->count();

        $idea = auth()->user()->apiKey->feedBacks
        ->where('type', 'IDEA')
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
    public function index()
    {
        //
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
        //
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
    public function update(Request $request, Feedback $feedback)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Feedback $feedback)
    {
        //
    }
}