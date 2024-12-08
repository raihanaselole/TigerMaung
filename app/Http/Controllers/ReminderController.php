<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Reminder;

class ReminderController extends Controller
{
    /**
     * Menampilkan daftar pengingat.
     */
    public function index()
    {
        $reminders = Reminder::orderBy('reminder_date', 'asc')->get();
        return view('reminders.index', compact('reminders'));
    }

    /**
     * Menampilkan form untuk membuat pengingat baru.
     */
    public function create()
    {
        return view('reminders.create');
    }

    /**
     * Menyimpan pengingat baru ke database.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'reminder_date' => 'required|date',
        ]);

        Reminder::create([
            'title' => $request->title,
            'reminder_date' => $request->reminder_date,
        ]);

        return redirect()->route('reminders.index')->with('success', 'Reminder added successfully!');
    }

    /**
     * Menampilkan form untuk mengedit pengingat.
     */
    public function edit(Reminder $reminder)
    {
        return view('reminders.edit', compact('reminder'));
    }

    /**
     * Memperbarui data pengingat di database.
     */
    public function update(Request $request, Reminder $reminder)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'reminder_date' => 'required|date',
        ]);

        $reminder->update([
            'title' => $request->title,
            'reminder_date' => $request->reminder_date,
            'is_completed' => $request->has('is_completed'),
        ]);

        return redirect()->route('reminders.index')->with('success', 'Reminder updated successfully!');
    }

    /**
     * Menghapus pengingat dari database.
     */
    public function destroy(Reminder $reminder)
    {
        $reminder->delete();

        return redirect()->route('reminders.index')->with('success', 'Reminder deleted successfully!');
    }
}