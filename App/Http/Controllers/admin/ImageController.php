<?php

namespace App\Http\Controllers\Admin;

use App\Image;
use App\ProjectImages;
use App\RefImageType;
use Illuminate\Routing\Controller as BaseController;
use Yajra\Datatables\Datatables;
use Illuminate\Http\Request as Request;

class ImageController extends BaseController
{

    public function index() {

        return view('admin.image.index');
    }

    public function edit($id)
    {
        $image = Image::find($id);
        return view('admin.image.edit')->with(compact('image'));
    }

    public function update(Request $request)
    {
        $image = Image::find($request->input('id'));
        $filename = $request->image_file->store('');
        $image->path = '/storage/'.$filename;
        $image->save();
        return redirect('admin/image');
    }

    public function delete($id)
    {
        $image = Image::find($id);
        $image->forceDelete();
        $projectImages = ProjectImages::where('image_id', $id)->get();
        foreach ($projectImages as $projectImage) {
            $projectImage->forceDelete();
        }
        return view('admin.image.index');
    }

    public function data()
    {
        $images = \DB::table('images')
            ->select(['id', 'name', 'path']);


        return Datatables::of($images)
            ->addColumn('action', function ($images) {
                return '<a href="/admin/image/edit/'.$images->id.'" class="btn btn-xs btn-info"><i class="glyphicon glyphicon-edit"></i> Edit</a>
                        <a href="/admin/image/delete/'.$images->id.'" class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-edit"></i> Delete</a>
                ';
            })
            ->editColumn('id', 'ID: {{$id}}')
            ->make(true);
    }
}