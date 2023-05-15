<?php

namespace App\Http\Controllers;

use App\Models\Sold;
use App\Models\History;
use App\Models\Customers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\CustomerCreate;
use Illuminate\Support\Facades\Storage;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('customers.default',[
            'Customers' => Customers::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('customers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CustomerCreate $request)
    {
        $data = $request->validated();
        $data['photo'] = request()->file('photo')->store("customers");
        Customers::create($data);
        

        History::create([
            'name' => 'Add Customer',
            'date' => date('Y-m-d H:m:s'),
            'privilege' => 'santa'
        ]);

        return redirect('customers')->with('success','Create Has Been Success');
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
        return view('customers.edit',[
            'customer' => Customers::findOrFail($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CustomerCreate $request, string $id)
    {

        $customer = Customers::findOrFail($id);

        $data = $request->validated();

        if($request->hasFile('photo')){

            if(!empty($customer->photo) && Storage::exists($customer->photo)){
                Storage::delete($customer->photo);
            }

            $data['photo'] = request()->file('photo')->store("customers");
        }else {
            unset($data['photo']);
        }

        $customer->update($data);

        History::create([
            'name' => 'Edit Customer '.$id,
            'date' => date('Y-m-d'),
            'privilege' => 'santa'
        ]);

        // Customers::findOrFail($id)->update($request->validated());

        return redirect(route('customers.index'))->with('success','Update Done');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $solds = DB::table('solds')->where('customer_id',$id)->get('id');
        foreach($solds as $sold){
            Sold::findOrFail($sold->id)->delete();
        }
        

        Customers::findOrFail($id)->delete();
        return redirect('/customers');
    }
}
