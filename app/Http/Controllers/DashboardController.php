<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Progres;
use App\Models\Reminder;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Get the ID of the logged-in user
        $userId = Auth::id();

        // Count tasks by status for the logged-in user
        $completedTasks = Progres::where('status', 'completed')
                                  ->where('user_id', $userId)  // Filter by logged-in user
                                  ->count();

        $notStartedTasks = Progres::where('status', 'not started')
                                  ->where('user_id', $userId)  // Filter by logged-in user
                                  ->count();

        $inProgressTasks = Progres::where('status', 'in progress')
                                  ->where('user_id', $userId)  // Filter by logged-in user
                                  ->count();

        // Count reminders for the logged-in user (assuming reminders are user-specific)
        $reminderCount = Reminder::where('user_id', $userId)->count();  // Filter by logged-in user

        // Send the data to the dashboard view
        return view('admin.index', compact(
            'completedTasks',
            'notStartedTasks',
            'inProgressTasks',
            'reminderCount'
        ));
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
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
