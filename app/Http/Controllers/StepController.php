<?php

namespace App\Http\Controllers;
use App\Models\Step;
use App\Models\Project;
use App\Models\Link;
use Illuminate\Http\Request;

class StepController extends Controller
{
    public function index($id)
    {
            $project = Project::with('step')->where('id',$id)->first();
            $steps = Step::orderBy('order')->get();
            $links = Link::all()->where('project_id',$id);	
            return view('step', compact('steps', "project",'links'));
    }
    // public function show($id)
    // {    
    //         $proje= Project::where('id',$id)->first();
    //         return view('step')->with('proje', $proje);
    // }
}
