<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;

class ProjectController extends Controller
{

    public function index()
    {
        $project = Project::paginate(5);

        return response()->json($project);
    }

    public function show($id)
    {
        $project = Project::where('id', $id)->first();

        return response()->json([
            'success'   => $project ? true : false,
            'results'   => $project,
        ]);
    }
}
