<?php
declare(strict_types = 1);

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Educationcourse;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses = Course::all();
        return view('course.index', ['courses' => $courses]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('course.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request Request is de store.
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Course::insert([
            'name' => $request->name,
            'SBU' => $request->SBU,
            'user_id' => $request->user_id,
            'education_id' => $request->education_id,
            'description' => $request->description,
        ]);

        return redirect()->route('course.index');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function show(Course $course)
    {
        return view('course.show', compact('course'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Course $course
     * @return \Illuminate\Http\Response
     */
    public function edit(Course $course)
    {
        return view('course.edit', compact('course'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Course $course)
    {
        $request->validate([
            'name' => 'required',
            'SBU' => 'required',
            'user_id' => 'required',
            'description' => 'required',
        ]);
        $course->update($request->all());

        return redirect()->route('course.show', compact('course'))
            ->with('success', 'Course updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function destroy(Course $course)
    {
        $course->delete();

        return redirect()->route('course.index')
            ->with('success', 'Course deleted successfully');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request Request is de store.
     * @return \Illuminate\Http\Response
     */
    public function linkCourse(Request $request)
    {
        Educationcourse::insert([
            'course_id' => $request->course_id,
            'education_id' => $request->education_id,
        ]);
        
        return redirect()->route('course.educationcourseindex');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function linkCoursePage()
    {
        return view('course.linkcoursepage');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function educationCourseIndex()
    {
        $educationcourses = Educationcourse::all();
        return view('course.educationcourseindex', ['educationcourses' => $educationcourses]);
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Educationcourse  $educationcourse
     * @return \Illuminate\Http\Response
     */
    public function educationCourseShow(Educationcourse $educationcourse)
    {
        return view('course.educationcourseshow', compact('educationcourse'));
    }
}
