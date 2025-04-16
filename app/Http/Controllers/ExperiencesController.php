<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;
use App\Models\Experience;

class ExperiencesController extends Controller
{
    public function list()
    {
        return view('experiences.list', [
            'experiences' => Experience::all()
        ]);
    }

    public function addForm()
    {
        return view('experiences.add');
    }

    public function add()
    {
        $attributes = request()->validate([
            'job_title' => 'required',
            'company_name' => 'required',
            'location' => 'nullable|string',
            'employment_type' => 'nullable|string',
            'start_date' => 'required|date',
            'end_date' => 'nullable|date|after_or_equal:start_date',
        ]);

        $experience = new Experience();
        $experience->job_title = $attributes['job_title'];
        $experience->company_name = $attributes['company_name'];
        $experience->location = $attributes['location'] ?? null;
        $experience->employment_type = $attributes['employment_type'] ?? null;
        $experience->start_date = $attributes['start_date'];
        $experience->end_date = $attributes['end_date'] ?? null;
        $experience->user_id = Auth::user()->id;
        $experience->save();

        return redirect('/console/experiences/list')
            ->with('message', 'Experience has been added!');
    }

    public function editForm(Experience $experience)
    {
        return view('experiences.edit', [
            'experience' => $experience,
        ]);
    }

    public function edit(Experience $experience)
    {
        $attributes = request()->validate([
            'job_title' => 'required',
            'company_name' => 'required',
            'location' => 'nullable|string',
            'employment_type' => 'nullable|string',
            'start_date' => 'required|date',
            'end_date' => 'nullable|date|after_or_equal:start_date',
        ]);

        $experience->job_title = $attributes['job_title'];
        $experience->company_name = $attributes['company_name'];
        $experience->location = $attributes['location'] ?? null;
        $experience->employment_type = $attributes['employment_type'] ?? null;
        $experience->start_date = $attributes['start_date'];
        $experience->end_date = $attributes['end_date'] ?? null;
        $experience->save();

        return redirect('/console/experiences/list')
            ->with('message', 'Experience has been edited!');
    }

    public function delete(Experience $experience)
    {
        $experience->delete();

        return redirect('/console/experiences/list')
            ->with('message', 'Experience has been deleted!');
    }
}
