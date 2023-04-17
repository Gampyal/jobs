<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorejobRequest;
use App\Http\Requests\UpdatejobRequest;
use App\Models\job;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $index = Job::all();
        return response()->json($index, 200);
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
    public function store(StorejobRequest $request)
    {
        Job::Create($this->validated());
        return response()->json('Record created successfully', 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(job $job)
    {
        $find = Job::findOrFail($job);
        return response()->json('$find', 200);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(job $job)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatejobRequest $request, job $job)
    {
        $find = Job::findOrFail($job);
        $find->update($request->validated());
        return response()->json('Record updated successfully', 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(job $job)
    {
        $find = Job::findOrFail($job);
        $find->destroy();
        return response()->json('Record deleted successfully', 200);
    }
}
