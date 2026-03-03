<?php

namespace App\Http\Controllers;

use App\Http\Requests\StudentCreateRequest;
use App\Models\User;
use App\traits\UploadTrait;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    use UploadTrait;

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = User::isAdmin()->latest()->get();
        return view('students.index', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $students = User::where('');
        return view('students.create', compact('students'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StudentCreateRequest $request)
    {
        $validatedData = $request->validated();

        if ($request->hasFile('image')) {
            $validatedData['image'] = $this->upload($request->file('image'));
        }
        $user = User::firstOrCreate(['email' => $validatedData['email']], $validatedData);
        $user->assignRole('user');
        return redirect()->back()->with('success', 'Student has been added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $student = User::findOrFail($id);

        return view('students.show', compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user, $id)
    {
        $student = User::findOrFail($id);
        return view('students.edit', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StudentCreateRequest $request, $id)
    {
        $validatedData = $request->validated();
        $user = User::findOrFail($id);
        if ($request->hasFile('image')) {
            if ($user && $user->image) {
                $this->imageExist($user->image);
            }
            $validatedData['image'] = $this->upload($request->file('image'));
        }
        $user->update($validatedData);
        return redirect()->route('students.index')->with('success', 'Student has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $user = User::findOrfail($id);
        if ($user->exists() && $user->image) {
            $this->imageExist($user->image);
        }
        $user->delete();
        return redirect()->back()->with('error', 'Student has been deleted successfully');
    }

    public function studentStatus(Request $request)
    {
        $validatedData = $request->validate([
            'status' => ['required', 'in:1,0'],
            'student_id' => ['required', 'numeric'],
        ]);
        $student = User::findOrFail($validatedData['student_id']);
        $student->update([
            'status' => $validatedData['status'],
        ]);
        return redirect()->back()->with('success', 'Student status has been changed');
    }
    public function uploadImage(Request $request)
    {
        $validatedData = $request->validate([
            'image' => ['required', 'mimes:jpeg,jpeg,gif', 'size:2048'],
            'student_id' => ['required', 'numeric'],
        ]);
       
        $student = User::findOrFail($validatedData['student_id']);
          
        if ($request->hasFile('image')) {
            if ($student && $student->image) {
                $this->imageExist($student->image);
            }
            $validatedData['image'] = $this->upload($request->file('image'));
        }
     
        $student->update([
            'image' => $validatedData['image'],
        ]);
        return redirect()->back()->with('success', 'Student image has been changed');
    }

    public function inactiveStudent(){
       $students = User::inactive()->get();
       return view('students.inactive',compact('students'));
    }
}
