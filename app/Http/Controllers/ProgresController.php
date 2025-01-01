<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Progres;

class ProgresController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $progress = Progres::where('user_id', auth()->id())->get();
        return view('admin.progres.index', compact('progress'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.progres.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // validasi form input
        $validated = $request->validate([
            'task_name' => 'required|string',
            'description' => 'required|string',
            'status' => 'required|in:not started,in progress,completed',
            'due_date'=> 'required|date'
        ]);
        $validated['user_id'] = auth()->id();

        //$validated['user_id'] = auth()->id();
        Progres::create($validated);
        return redirect('dashboard/progres')->with('pesan','Progres berhasil ditambahkan');
        // return redirect('dashboard/progres');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $progress = Progres::find($id);
        return view('admin.progres.show', compact('progress'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $progress = Progres::find($id);
        return view('admin.progres.edit', compact('progress'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'task_name' => 'required|string',
            'description' => 'required|string',
            'status' => 'required|in:not started,in progress,completed',
            'due_date'=> 'required|date'
        ]);
        $progress = Progres::find($id);
        $progress->update($validated);

        return redirect('dashboard/progres')->with('pesan','Progres berhasil diperbaharui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $progress = Progres::find($id);
        $progress->delete();

        return redirect('/dashboard/progres')->with('pesan','Progres berhasil dihapus');
    }
}
