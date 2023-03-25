<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $jobs = Job::latest()->paginate(10);
        
        return view('jobs.index', [
            'jobs' => $jobs,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('jobs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'job_title' => 'required',
            'ship_type' => 'required',
            'salary' => 'required',
            'contract_in_months' => 'required',
            'requirement' => 'required',
        ]);

        $job = new Job();
        $job->job_title = $request->job_title;
        $job->ship_type = $request->ship_type;
        $job->salary = $request->salary;
        $job->contract_in_months = $request->contract_in_months;
        $job->requirement = $request->requirement;
        $job->save();

        return redirect(route('jobs.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Job $job): View
    {
        return view('jobs.detail', [
            'job' => $job,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Job $job): View
    {
        return view('jobs.edit', [
            'job' => $job
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Job $job): RedirectResponse
    {
        $validated = $request->validate([
            'job_title' => 'required',
            'ship_type' => 'required',
            'salary' => 'required',
            'contract_in_months' => 'required',
            'requirement' => 'required',
        ]);

        $job->update($validated);

        return redirect(route('jobs.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Job $job): RedirectResponse
    {
        $job->delete();

        return redirect(route('jobs.index'));
    }
}
