<?php

namespace App\Http\Controllers;

use App\Image;
use Illuminate\Http\Request;
use \App\Project;
use \App\Tag;

class HomeController extends Controller
{
    public $background;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->background = Image::where('ref_image_type_id', 4)->first();
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $projects = Project::all();
        $tags = Tag::all();
        return view('index')->with(compact('projects', 'tags'))->with('background', $this->background);

    }

    public function portfolio()
    {
        $projects = Project::all();
        $tags = Tag::all();
        return view('portfolio')->with(compact('projects', 'tags'))->with('background', $this->background);
    }

    public function about()
    {
        $projects = Project::all();
        return view('about')->with(compact('projects'))->with('background', $this->background);
    }

    public function contact()
    {
        $projects = Project::all();
        return view('contact')->with(compact('projects'))->with('background', $this->background);
    }

    public function journal()
    {
        $projects = Project::all();
        return view('journal')->with(compact('projects'))->with('background', $this->background);
    }

    public function project($id)
    {
        $projects = Project::all();
        $project = Project::find($id);
        $background = $project->cover_image();
        return view('project')->with(compact('projects', 'project','background'));
    }
}
