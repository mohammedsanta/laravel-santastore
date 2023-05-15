<?php

namespace App\Http\Controllers;

use App\Models\Sold;
use App\Models\Items;
use App\Models\History;
use Illuminate\Http\Request;
use App\Http\Requests\ItemRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ItemsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        return view('items.default',[
            'items' => Items::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('items.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ItemRequest $request)
    {

        $data = $request->validated();
        $data['photo'] = request()->file('photo')->store('test');
        Items::create($data);

        History::create([
            'name' => 'Add Item',
            'date' => date('Y-m-d'),
            'privilege' => 'santa'
        ]);

        return redirect('/items')->with('success','You Created A New Item');
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
        return view('items.edit',[
            'item' => Items::findOrFail($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ItemRequest $request, string $id)
    {

        $item = Items::findOrFail($id);

        $data = $request->validated();

        if($request->hasFile('photo')){
            if(!empty($item->photo) && Storage::exists($item->photo)){
                Storage::delete($item->photo);
            }
            $data['photo'] = request()->file('photo')->store('test');
        }else {
            unset($data['photo']);
        }

        $item->update($data);

        History::create([
            'name' => "Edit Item $id",
            'date' => date('Y-m-d H:m:s'),
            'privilege' => 'santa'
        ]);

        return redirect('/items')->with('success','Update Done');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

        $solds = DB::table('solds')->where('item_id',$id)->get('id');

        if(!is_null($solds)){
            foreach($solds as $sold){
                Sold::findOrFail($sold->id)->delete();
            }
        }

        $item = Items::findOrFail($id);

        if(!empty($item->photo) && Storage::exists($item->photo)){
            Storage::delete($item->photo);
        }

        $item->delete();
        return redirect('/items');
    }
}
