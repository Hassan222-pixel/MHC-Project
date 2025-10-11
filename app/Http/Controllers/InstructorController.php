<?php

namespace App\Http\Controllers;

use App\Models\Instructor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class InstructorController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:instructor-list|instructor-create|instructor-edit|instructor-delete', ['only' => ['index', 'show']]);
        $this->middleware('permission:instructor-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:instructor-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:instructor-delete', ['only' => ['destroy']]);
    }

    public function index()
    {
        $instructors = Instructor::all();
        return view('instructors.index', compact('instructors'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        return view('instructors.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:instructors',
            'title' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'students_graduated' => 'nullable|integer',
            'rating' => 'nullable|numeric|min:0|max:5',
            'image' => 'nullable|image|mimes:jpg,png,jpeg,gif|max:2048',
        ]);

        $data = $request->all();

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('instructors', 'public');
        }

        Instructor::create($data);

        return redirect()->route('instructors.index')
            ->with('success', 'Instructor created successfully.');
    }

    public function show(Instructor $instructor)
    {
        return view('instructors.show', compact('instructor'));
    }

    public function edit(Instructor $instructor)
    {
        return view('instructors.edit', compact('instructor'));
    }

    public function update(Request $request, Instructor $instructor)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:instructors,email,' . $instructor->id,
            'title' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'students_graduated' => 'nullable|integer',
            'rating' => 'nullable|numeric|min:0|max:5',
            'image' => 'nullable|image|mimes:jpg,png,jpeg,gif|max:2048',
        ]);

        $data = $request->all();

        if ($request->hasFile('image')) {
            if ($instructor->image) {
                Storage::disk('public')->delete($instructor->image);
            }
            $data['image'] = $request->file('image')->store('instructors', 'public');
        }

        $instructor->update($data);

        return redirect()->route('instructors.index')
            ->with('success', 'Instructor updated successfully.');
    }

    public function destroy(Instructor $instructor)
    {
        if ($instructor->image) {
            Storage::disk('public')->delete($instructor->image);
        }

        $instructor->delete();

        return redirect()->route('instructors.index')
            ->with('success', 'Instructor deleted successfully.');
    }
}
