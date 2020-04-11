<?php

namespace App\Http\Controllers\mobile;
use Illuminate\Support\Facades\DB;
use \App\Secret;
use \App\RefUniversity;

class SecretController
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
        return \View::make('mobile.secret.index')->with(compact('secrets','universities'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $universities = RefUniversity::all();
        return \View::make('mobile.secret.create')->with(compact('universities'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        $input = (object) Input::all();
        dd($input);
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function show($id)
    {
        $universities = RefUniversity::all();
        $secret = Secret::find($id);
        return \View::make('mobile.secret.show')->with(compact('secret','universities'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function edit($id)
    {

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