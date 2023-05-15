<?php

namespace App\Http\Controllers;

use App\Models\Needs;
use App\Models\History;
use Illuminate\Http\Request;
use App\Http\Requests\NeedsRequest;

class NeedsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('needs.default',[
            'needs' => Needs::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('needs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(NeedsRequest $request)
    {
        Needs::create($request->validated());

        History::create([
            'name' => 'Add Need',
            'date' => date('Y-m-d'),
            'privilege' => 'santa'
        ]);

        return redirect('needs')->with('success','Need Has Been Added');
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
        return view('needs.edit',[
            'need' => Needs::findOrFail($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(NeedsRequest $request, string $id)
    {

        History::create([
            'name' => "Edit Need $id",
            'date' => date('Y-m-d H:m:s'),
            'privilege' => 'santa'
        ]);

        Needs::findOrFail($id)->update($request->validated());

        return redirect('needs')->with('success','Update Done');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Needs::findOrFail($id)->delete();
        return redirect('/needs');
    }
}
