<?php
declare(strict_types = 1);

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Education;

class EducationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $educations = Education::all();
        return view('education.index', ['educations' => $educations]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('education.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Education::insert([
            'name' => $request->name,
            'crebo' => $request->crebo,
            'numbertofollowcourse' => $request->numbertofollowcourse,
        ]);

        return redirect()->route('education.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Education  $education
     * @return \Illuminate\Http\Response
     */
    public function show(Education $education)
    {
        return view('education.show', compact('education'));
    }

   /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Education $education
     * @return \Illuminate\Http\Response
     */
    public function edit(Education $education)
    {
        return view('education.edit', compact('education'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Education $education
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Education $education)
    {
        $request->validate([
            'name' => 'required',
            'crebo' => 'required',
            'numbertofollowcourse' => 'required',
        ]);
        $education->update($request->all());

        return redirect()->route('education.show', compact('education'))
            ->with('success', 'education updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Education  $education
     * @return \Illuminate\Http\Response
     */
    public function destroy(Education $education)
    {
        $education->delete();

        return redirect()->route('education.index')
            ->with('success', 'Education deleted successfully');
    }
}
