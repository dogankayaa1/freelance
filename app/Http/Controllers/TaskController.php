<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\proje;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function store(Request $request, proje $proje)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'status' => 'required|in:todo,in_progress,review,done',
            'tag' => 'nullable|string',
            'description' => 'nullable|string',
            'due_date' => 'nullable|date',
            'time_spent' => 'nullable|integer|min:0',
        ]);

        $proje->tasks()->create($validated);

        return redirect()->back()->with('success', 'Görev başarıyla eklendi.');
    }

    public function update(Request $request, Task $task)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'status' => 'required|in:todo,in_progress,review,done',
            'tag' => 'nullable|string',
            'description' => 'nullable|string',
            'due_date' => 'nullable|date',
            'time_spent' => 'nullable|integer|min:0',
        ]);

        $task->update($validated);

        return redirect()->back()->with('success', 'Görev başarıyla güncellendi.');
    }

    public function destroy(Task $task)
    {
        $task->delete();
        return redirect()->back()->with('success', 'Görev başarıyla silindi.');
    }
}
