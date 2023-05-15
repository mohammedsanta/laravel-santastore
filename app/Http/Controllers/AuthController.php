<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class AuthController extends Controller
{
    
    public function index()
    {
        return view('auth.default',[
            'users' => User::all()
        ]);
    }

    public function view()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        
        $credentials = $request->validate([
            'name' => ['required'],
            'password' => ['required'],
        ]);

        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            session()->flash('message','You Are Login');
            return redirect('/');
        }

        return back()->withErrors(['name' => 'Invalid Credential']);
    }

    public function logout(Request $request)
    {
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();
        $request->session()->flash('message','You Are Out');
        return redirect('auth/login');
    }

    public function signup()
    {

        return view('auth.signup');

    }

    public function store(Request $request)
    {

        $this->authorize('create',User::class);

        $create = $request->validate([
            // 'FirstName' => ['required','min:5','max:20'],
            // 'LastName' => ['required','min:5','max:20'],
            'name' => ['required','min:4','max:20'],
            'email' => ['required','email','unique:users','min:5','max:20'],
            'password' => ['required','min:5','max:20','confirmed'],
            'password_confirmation' => ['required','min:5','max:20'],
        ]);

        $create['password'] = bcrypt($create['password']);

        User::create($create);

        return redirect('/');
    }

    public function edit($id)
    {

        $this->authorize('create',User::class);

        return view('auth.edit',[
            'user' => User::findOrFail($id)
        ]);
    }

    public function update($id)
    {

        $this->authorize('update',User::class);

        $user = User::findOrFail($id);

        $user->update(request(['name','email','password','privilege']));

        return redirect('/')->with('success','Update User Done');
    }

}
