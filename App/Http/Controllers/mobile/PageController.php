<?php

namespace App\Http\Controllers\mobile;
use Illuminate\Support\Facades\DB;
use \App\Secret;
use \App\RefUniversity;

class PageController
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index( )
    {
        $secrets = Secret::all();
        $universities = RefUniversity::all();
        return \View::make('mobile.index')
            ->with('secrets',$secrets)
            ->with('universities',$universities);
    }


    public function faq()
    {
        return \View::make('mobile.faq');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        dd("news controller create()");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int $id
     * @return Response
     */
    public function update($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
 
}