<?php

namespace App\Http\Controllers;

use App\Models\Progres;
use Illuminate\Support\Facades\Auth;
use App\Models\Reminder;
use Illuminate\Http\Request;

class StatisticController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Ensure to get statistics based on the logged-in user
        $userId = Auth::id();

        // Count tasks by status for the logged-in user
        $completedTasks = Progres::where('status', 'completed')
                                  ->where('user_id', $userId)
                                  ->count();

        $notStartedTasks = Progres::where('status', 'not started')
                                  ->where('user_id', $userId)
                                  ->count();

        $inProgressTasks = Progres::where('status', 'in progress')
                                  ->where('user_id', $userId)
                                  ->count();

        return view('admin.statistik.index', compact(
            'completedTasks', 'notStartedTasks', 'inProgressTasks'
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
