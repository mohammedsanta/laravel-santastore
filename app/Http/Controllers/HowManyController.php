<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HowManyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $this->authorize('isAdmin');

        return view('howmany.default',[
            'customers' => DB::table('customers')->count(),
            'items' => DB::table('items')->count(),
            'solds' => DB::table('solds')->count(),
            'meets' => DB::table('meets')->count(),
            'users' => DB::table('users')->count(),
        ]);
    }

}
