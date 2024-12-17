<?php

namespace App\Http\Controllers;

use App\Models\Reminder;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Auth;

class ReminderController extends Controller
{
    public function index()
    {
        $reminders = Reminder::all();
        return view('admin.reminders.index', compact('reminders'));
    }

    public function create()
    {
        return view('admin.reminders.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'reminder_date' => 'required|date',
        ]);
        $validated['user_id'] = auth()->id();

        $reminder = Reminder::create([
            'user_id' => auth()->id(),  // Assuming user_id is being tracked
            'title' => $request->title,
            'description' => $request->description,
            'reminder_date' => $request->reminder_date,
            // Add other necessary fields
        ]);

            // Format reminder_date to 'Y-m-d H:i'
        $formattedDate = Carbon::parse($reminder->reminder_date)->format('Y-m-d H:i');

        // Create the notification message
        $notification = [
            'message' => "Reminder: Bimbingan {$reminder->title} pada tanggal {$formattedDate}.",
            'title' => $reminder->title,
            'reminder_date' => $formattedDate,
        ];

        // Get existing notifications from the cache
        $notifications = Cache::get('notifications', []);

        // Add new notification to the list
        $notifications[] = $notification;

        // Limit the number of notifications to 5
        if (count($notifications) > 5) {
            array_shift($notifications); // Remove the oldest notification
        }

        // Store the notifications back into cache
        Cache::forever('notifications', $notifications);
        
        Reminder::create($validated);
        return redirect('dashboard/reminders')->with('pesan','Reminder berhasil ditambahkan');
        // return redirect('dashboard/reminders');
        
    }

    public function show(string $id)
    {
        $reminders = Reminder::find($id);
        return view('admin.reminders.show', compact('reminders'));
    }

    public function edit(string $id)
    {
        $reminders = Reminder::find($id);
        return view('admin.reminders.edit', compact('reminders'));
    }

    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'reminder_date' => 'required|date',
        ]);
        $reminders = Reminder::find($id);
        $reminders->update($validated);

        return redirect('dashboard/reminders')->with('pesan','Reminder berhasil diperbaharui');
    }

    public function destroy(string $id)
    {
        $reminders = Reminder::find($id);
        $reminders->delete();

        return redirect('dashboard/reminders')->with('pesan','Reminder berhasil dihapus');
    }
}
