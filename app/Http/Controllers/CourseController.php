<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use App\Http\Requests\CourseStoreFormRequest;

class CourseController extends Controller
{
    public function index()
    {
        return view('users.courses.index',[

            'courses' => Course::all()

        ]);
    }

    public function create()
    {
        return view('users.courses.create');
    }

    public function store(CourseStoreFormRequest $request)
    {
        $image_name = rand() . '.' . $request->image->getClientOriginalExtension();
        $request->image->move(public_path('files/images/'.auth()->id()), $image_name);
        $file_url = URL::to('/files/images/'.auth()->id().'/'.$image_name);

        $course = Course::create([
            'name' => $request->name,
            'gpa_requirement' => $request->gpa_requirement,
            'student_capacity' => $request->student_capacity,
            'requires_scholarship' => $request->requires_scholarship ? 1 : 0,
            'user_id' => auth()->id(),
            'code' => random_int(99999,1000000),
            'image' => $file_url,
        ]);
        if($course) {
            return back()->with('status','store-course');
        }
    }

    public function show(Course $course)
    {
        //
    }

    public function edit(Course $course)
    {
        //
    }

    public function update(Request $request, Course $course)
    {
        //
    }

    public function destroy(Course $course)
    {
        //
    }
}
