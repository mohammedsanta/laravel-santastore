<?php

namespace App\Http\Controllers;

use App\Models\Sold;
use App\Models\Items;
use App\Models\History;
use App\Models\Customers;
use Illuminate\Http\Request;
use App\Http\Requests\SoldRequest;

class SoldController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('sold.default',[
            'Solds' => Sold::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('sold.create',[
            'Item' => Items::all(),
            'Customer' => Customers::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SoldRequest $request)
    {
        
        Sold::create($request->validated());

        History::create([
            'name' => 'Add Sold',
            'date' => date('Y-m-d'),
            'privilege' => 'santa'
        ]);

        return redirect('/sold')->with('success','New Sold Success');
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Sold::find($id)->delete();
        return redirect('/sold');
    }
}
