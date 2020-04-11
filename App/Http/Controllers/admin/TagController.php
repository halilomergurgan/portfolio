<?php

namespace App\Http\Controllers\Admin;

use App\Tag;
use App\ProjectTags;
use Illuminate\Routing\Controller as BaseController;
use Yajra\Datatables\Datatables;
use Illuminate\Http\Request as Request;

class TagController extends BaseController
{

    public function index() {

        return view('admin.tag.index');
    }

    public function create()
    {
        return view('admin.tag.create');
    }

    public function store(Request $request)
    {
        $tag = new Tag();
        $tag->name = $request->input('name');
        $tag->save();
        return redirect('admin/tag');
    }

    public function edit($id)
    {
        $tag = Tag::find($id);
        return view('admin.tag.edit')->with(compact('tag'));
    }

    public function update(Request $request)
    {
        $tag = Tag::find($request->input('id'));
        $tag->name = $request->input('name');
        $tag->save();
        return redirect('admin/tag');
    }

    public function delete($id)
    {
        $tag = Tag::find($id);
        $tag->forceDelete();
        $projectTags = ProjectTags::where('tag_id', $id)->get();
        foreach ($projectTags as $projectTag) {
            $projectTag->forceDelete();
        }
        return view('admin.tag.index');
    }

    public function data()
    {
        $tags = \DB::table('tags')
            ->select(['id', 'name']);


        return Datatables::of($tags)
            ->addColumn('action', function ($tags) {
            return '<a href="/admin/tag/edit/'.$tags->id.'" class="btn btn-xs btn-info"><i class="glyphicon glyphicon-edit"></i> Edit</a>
                    <a href="/admin/tag/delete/'.$tags->id.'" class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-edit"></i> Delete</a>
            ';
        })
            ->editColumn('id', 'ID: {{$id}}')
            ->make(true);
    }
}