<?php

namespace App\Http\Controllers;

use App\Models\Reminder;
use Illuminate\Http\Request;

class ReminderController extends Controller
{
    public function index()
    {
        $reminders = Reminder::all();
        return view('dashboard.reminders.index', compact('reminders'));
    }

    public function create()
    {
        return view('dashboard.reminders.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'reminder_date' => 'required|date',
        ]);

        Reminder::create($request->all());

        return redirect()->route('reminders.index')->with('pesan', 'Reminder berhasil ditambahkan.');
    }

    public function show(Reminder $reminder)
    {
        return view('dashboard.reminders.show', compact('reminder'));
    }

    public function edit(Reminder $reminder)
    {
        return view('dashboard.reminders.edit', compact('reminder'));
    }

    public function update(Request $request, Reminder $reminder)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'reminder_date' => 'required|date',
        ]);

        $reminder->update($request->all());

        return redirect()->route('reminders.index')->with('pesan', 'Reminder berhasil diperbarui.');
    }

    public function destroy(Reminder $reminder)
    {
        $reminder->delete();
        return redirect()->route('reminders.index')->with('pesan', 'Reminder berhasil dihapus.');
    }
}
