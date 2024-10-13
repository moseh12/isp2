<?php

namespace App\Http\Controllers;

use App\Models\Plan; // Ensure this line is present
use Illuminate\Http\Request;

class PlanController extends Controller
{
    // Method to list all plans
    public function index()
    {
        $plans = Plan::all();
        return view('admin.plan_list', compact('plans'));
    }

    // Method to show the form for creating a new plan
    public function create()
    {
        return view('admin.create_plan');
    }

    // Method to store a newly created plan
    public function store(Request $request)
    {
        $request->validate([
            'plan' => 'required|string|max:255',
            'service_type' => 'required|string|max:255',
            'amount' => 'required|numeric',
            'queue' => 'nullable|string|max:255',
            'session_time' => 'nullable|string|max:255',
            'bytes_quota' => 'nullable|integer',
            'status' => 'required|string|in:active,inactive',
        ]);

        Plan::create($request->all());

        return redirect()->route('plans.index')->with('success', 'Plan created successfully.');
    }

    // Method to show the form for editing a specific plan
    public function edit(Plan $plan)
    {
        return view('admin.edit_plan', compact('plan'));
    }

    // Method to update a specific plan
    public function update(Request $request, Plan $plan)
    {
        $request->validate([
            'plan' => 'required|string|max:255',
            'service_type' => 'required|string|max:255',
            'amount' => 'required|numeric',
            'queue' => 'nullable|string|max:255',
            'session_time' => 'nullable|string|max:255',
            'bytes_quota' => 'nullable|integer',
            'status' => 'required|string|in:active,inactive',
        ]);

        $plan->update($request->all());

        return redirect()->route('plans.index')->with('success', 'Plan updated successfully.');
    }

    // Method to delete a specific plan
    public function destroy(Plan $plan)
    {
        $plan->delete();
        return redirect()->route('plans.index')->with('success', 'Plan deleted successfully.');
    }
}
