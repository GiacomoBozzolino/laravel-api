<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Project;
use App\Models\Technology;
use App\Models\Type;

class ProjectController extends Controller
{
    public function index (){
        // $projects = Project::all();
        $projects= Project::with('technology','type')->get();
        return response()->json([
            'success'=> true,
            'results'=> $projects
        ]);
    }
}
