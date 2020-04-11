<?php

namespace App\Http\Controllers\Admin;

use App\Image;
use App\Project;
use App\Tag;
use App\ProjectTags;
use App\ProjectImages;
use Illuminate\Routing\Controller as BaseController;
use Yajra\Datatables\Datatables;
use Illuminate\Http\Request as Request;

class ProjectController extends BaseController
{

    public function index() {

        return view('admin.project.index');
    }

    public function create()
    {
        $tags = Tag::all()->pluck('name','id');
        return view('admin.project.create')->with(compact('tags'));
    }

    public function store(Request $request)
    {
        $project = Project::create($request->all());

        $count = 1;
        //Save Project Slide images
        if ( $request->project_images ) {
            foreach ($request->project_images as $photo) {
                $filename = $photo->store('');
                $image = new Image();
                $image->path = '/storage/'.$filename;
                $image->name = 'project: '. $project->name. ' slide image: '.$count++;
                $image->ref_image_type_id = 3;
                $image->save();
                ProjectImages::create([
                    'project_id' => $project->id,
                    'image_id' => $image->id
                ]);
            }
        }

        //Save ProjectCover
        $cover_filename = $request->project_cover->store('');
        $image = new Image();
        $image->path = '/storage/'.$cover_filename;
        $image->name = 'project: '. $project->title. ' cover image';
        $image->ref_image_type_id = 2;
        $image->save();
        ProjectImages::create([
            'project_id' => $project->id,
            'image_id' => $image->id
        ]);

        //Save ProjectTags
        if ( $request->project_tags ) {
            foreach ($request->project_tags as $tag) {
                ProjectTags::create([
                    'project_id' => $project->id,
                    'tag_id' => $tag
                ]);
            }
        }

        return $this->index();
    }

    public function edit($id)
    {
        $project = Project::find($id);
        return view('admin.project.edit')->with(compact('project'));
    }

    public function update(Request $request)
    {
        $project = Project::find($request->id);
        $project->title = $request->input('title');
        $project->content = $request->input('content');
        $project->save();

        return $this->index();
    }

    public function delete($id)
    {
        $project = Project::find($id);
        $project->forceDelete();
        $projectTags = ProjectTags::where('project_id', $id)->get();
        if($projectTags) {
            foreach ($projectTags as $projectTag) {
                $projectTag->forceDelete();
            }
        }
        $projectImages = ProjectImages::where('project_id', $id)->get();
        if($projectImages) {
            foreach ($projectImages as $projectImage) {
                Image::find($projectImage->image_id)->forceDelete();
                $projectImage->forceDelete();
            }
        }
        return view('admin.project.index');
    }

    public function data()
    {
        $projects = \DB::table('projects')
            ->select(['id', 'title']);


        return Datatables::of($projects)
            ->addColumn('action', function ($projects) {
            return '<a href="/admin/project/edit/'.$projects->id.'" class="btn btn-xs btn-info"><i class="glyphicon glyphicon-edit"></i> Edit</a>
                    <a href="/admin/project/delete/'.$projects->id.'" class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-edit"></i> Delete</a>
                ';
        })
            ->editColumn('id', 'ID: {{$id}}')
            ->make(true);
    }
}