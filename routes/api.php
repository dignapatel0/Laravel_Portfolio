<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Models\Type;
use App\Models\User;
use App\Models\Project;
use App\Models\Skill;
use App\Models\Education;
use App\Models\Experience;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/skills', function(){

    $skills = Skill::orderBy('title')->get();

    foreach($skills as $key => $skill)
    {
        if($skill['image'])
        {
            $skills[$key]['image'] = env('APP_URL').'storage/'.$skill['image'];
        }
    }

    return $skills;

});

Route::get('/experiences', function(){

    $experiences = Experience::orderBy('created_at')->get();

    foreach($experiences as $key => $experience)
    {
        $experiences[$key]['user'] = User::where('id', $experience['user_id'])->first();
    }

    return $experiences;

});
Route::get('/types', function(){

    $types = Type::orderBy('title')->get();
    return $types;

});

Route::get('/educations', function(){

    $educations = Education::orderBy('created_at')->get();

    foreach($educations as $key => $education)
    {
        $educations[$key]['user'] = User::where('id', $education['user_id'])->first();
    }

    return $educations;

});

Route::get('/projects', function(){

    $projects = Project::orderBy('created_at')->get();

    foreach($projects as $key => $project)
    {
        $projects[$key]['user'] = User::where('id', $project['user_id'])->first();
        $projects[$key]['type'] = Type::where('id', $project['type_id'])->first();

        if($project['image'])
        {
            $projects[$key]['image'] = env('APP_URL').'storage/'.$project['image'];
        }
    }

    return $projects;

});

Route::get('/projects/profile/{project?}', function(Project $project){

    $project['user'] = User::where('id', $project['user_id'])->first();
    $project['type'] = Type::where('id', $project['type_id'])->first();

    if($project['image'])
    {
        $project['image'] = env('APP_URL').'storage/'.$project['image'];
    }

    return $project;

});

