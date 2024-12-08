<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Progress;

class ProgressController extends Controller
{
    /**
     * Tampilkan semua progres pengguna tertentu.
     */
    public function index(Request $request)
    {
        $progress = Progress::where('user_id', $request->user()->id)->get();
        return response()->json($progress);
    }

    /**
     * Simpan progres baru.
     */
    public function store(Request $request)
    {
        $request->validate([
            'task_name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'status' => 'required|in:not started,in progress,completed',
            'due_date' => 'required|date',
        ]);

        $progress = Progress::create([
            'user_id' => $request->user()->id,
            'task_name' => $request->task_name,
            'description' => $request->description,
            'status' => $request->status,
            'due_date' => $request->due_date,
        ]);

        return response()->json(['message' => 'Progress created successfully.', 'data' => $progress], 201);
    }

    /**
     * Tampilkan detail progres tertentu.
     */
    public function show($id)
    {
        $progress = Progress::findOrFail($id);
        return response()->json($progress);
    }

    /**
     * Perbarui progres yang ada.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'task_name' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'status' => 'nullable|in:not started,in progress,completed',
            'due_date' => 'nullable|date',
        ]);

        $progress = Progress::findOrFail($id);

        // Perbarui data
        $progress->update($request->all());

        return response()->json(['message' => 'Progress updated successfully.', 'data' => $progress]);
    }

    /**
     * Hapus progres.
     */
    public function destroy($id)
    {
        $progress = Progress::findOrFail($id);

        $progress->delete();

        return response()->json(['message' => 'Progress deleted successfully.']);
    }
}