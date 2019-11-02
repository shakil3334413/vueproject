<?php

namespace App\Http\Controllers;

use App\Model\Catagory;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CatagoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Catagory::latest()->get();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Catagory::create($request->all());
        return response('Created',Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Catagory  $catagory
     * @return \Illuminate\Http\Response
     */
    public function show(Catagory $catagory)
    {
        return $catagory;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Catagory  $catagory
     * @return \Illuminate\Http\Response
     */
    public function edit(Catagory $catagory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Catagory  $catagory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Catagory $catagory)
    {
        $catagory->update($request->all());
        return response('Update',Response::HTTP_ACCEPTED);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Catagory  $catagory
     * @return \Illuminate\Http\Response
     */
    public function destroy(Catagory $catagory)
    {
        Catagory::destroy($catagory);
        return response('DELETE',response::HTTP_NO_CONTENT);
    }
}
