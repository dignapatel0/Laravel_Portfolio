<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use Illuminate\Validation\Rule;
use App\Models\Education;


class EducationsController extends Controller
{

    public function list()
    {
        return view('educations.list', [
            'educations' => Education::all()
        ]);
    }

    public function addForm()
    {
        return view('educations.add');
    }

    public function add()
    {
        $attributes = request()->validate([
            'institution_name' => 'required|string|max:255',
            'course_name' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'start_date' => 'required|date',
            'end_date' => 'nullable|date|after_or_equal:start_date',
        ]);

        $education = new Education();
        $education->institution_name = $attributes['institution_name'];
        $education->course_name = $attributes['course_name'];
        $education->location = $attributes['location'];
        $education->start_date = $attributes['start_date'];
        $education->end_date = $attributes['end_date'];
        $education->user_id = Auth::user()->id;
        $education->save();

        return redirect('/console/educations/list')
            ->with('message', 'Education record has been added!');
    }

    public function editForm(Education $education)
    {
        return view('educations.edit', [
            'education' => $education,
        ]);
    }

    public function edit(Education $education)
    {
        $attributes = request()->validate([
            'institution_name' => 'required|string|max:255',
            'course_name' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'start_date' => 'required|date',
            'end_date' => 'nullable|date|after_or_equal:start_date',
        ]);

        $education->institution_name = $attributes['institution_name'];
        $education->course_name = $attributes['course_name'];
        $education->location = $attributes['location'];
        $education->start_date = $attributes['start_date'];
        $education->end_date = $attributes['end_date'];
        $education->save();

        return redirect('/console/educations/list')
            ->with('message', 'Education record has been edited!');
    }

    public function delete(Education $education)
    {
        $education->delete();

        return redirect('/console/educations/list')
            ->with('message', 'Education record has been deleted!');
    }
}
