<?php

namespace App\Http\Controllers;

use App\Models\Meets;
use App\Models\History;
use Illuminate\Http\Request;
use App\Http\Requests\MeetsRequest;

class MeetsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('meets.default',[
            'meets' => Meets::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('meets.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(MeetsRequest $request)
    {
        Meets::create($request->validated());

        History::create([
            'name' => 'Add Meet',
            'date' => date('Y-m-d'),
            'privilege' => 'santa'
        ]);
        
        return redirect('/meets')->with('success','Meets Has Been Added');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('meets.edit',[
            'meet' => Meets::findOrFail($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(MeetsRequest $request, string $id)
    {

        History::create([
            'name' => "Edit Meet $id",
            'date' => date('Y-m-d H:m:s'),
            'privilege' => 'santa'
        ]);

        Meets::findOrFail($id)->update($request->validated());

        return redirect(route('meets.index'))->with('success','Update Done');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
